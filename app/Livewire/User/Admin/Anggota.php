<?php

namespace App\Livewire\User\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\UserWorkspace;
use App\Models\RoleWorkspace;
use App\Models\User;
use App\Models\Workspace;
use App\Models\DetailUserWorkspace;
use App\Mail\SendEmailWorkspace;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

#[Title('Anggota Workspace')]
class Anggota extends Component
{
    use WithPagination;
    public $workspace_id, $shortID, $paginate, $count, $role_id, $link_akses, $kode_akses, $selectedRole;
    public $editEmail, $editRole, $editNama, $user_id, $is_active, $namaRole, $nomorInduk, $genpass, $kaitAkun, $selectedKait;
    public $textareaValue   = '';
    public $email           = [];
    public $view            = 'index';
    public $search          = '';
    public $columns         = [];
    public $filter          = null;
    public $emails          = [];
    

    public function mount($workspace_id, $user_id=null, $view='') {
        $this->shortID = $workspace_id;
        // get ID Workspace from short UUID
        $a = UserWorkspace::with('user')->whereHas('user', function($query) use($workspace_id){
            $query->where('user_id', 'like', '%' . $workspace_id . '%');
        })->get();
        foreach ($a as $a) {
            $this->workspace_id = $a->workspace_id;
        }

        // for count all data
        $this->count = UserWorkspace::with(['user','role.role'])
        ->where('workspace_id', $this->workspace_id)
        ->count();

        // for thead
        $this->columns = [
            'Nama'      => 'user.name',
            'Role'      => 'role.role.nama'
        ];
        

        $workspace      = Workspace::findorFail($this->workspace_id);
        $this->link_akses = env('APP_URL') . 'join-workspace/' .$this->shortID . '/';
        $this->kode_akses = $workspace->kode_akses;

        if ($user_id) {
            $this->view         = $view;
            $userWorkspace      = UserWorkspace::with('user', 'role.role', 'detailUser')->findOrFail($user_id);
            $this->user_id      = $userWorkspace->id;
            $this->editEmail    = $userWorkspace->user->email;
            $this->editNama     = $userWorkspace->user->name;
            $this->editRole     = $userWorkspace->role->role->id;
            $this->namaRole     = $userWorkspace->role->role->nama;
            if($userWorkspace->detailUser_id != null){
                $this->is_active    = $userWorkspace->detailUser->is_active;
                $this->nomorInduk   = $userWorkspace->detailUser->nomor_induk;

                if ($userWorkspace->rw_id == '4') {
                    $this->kaitAkun = UserWorkspace::with('user')->where([
                        ['workspace_id', '=', $this->workspace_id],
                        ['rw_id', '=', '5'],    
                    ])->get()->pluck('user.name', 'user.id')->toArray();
                    $this->selectedKait = $userWorkspace->akun_terkait;
                }elseif ($userWorkspace->rw_id == '5') {
                    $this->kaitAkun = UserWorkspace::with('user')->where([
                        ['workspace_id', '=', $this->workspace_id],
                        ['rw_id', '=', '4'],    
                    ])->get()->pluck('user.name', 'user.id')->toArray();
                    $this->selectedKait = $userWorkspace->akun_terkait;
                }
            }
        }
    }

    // automation search
    public function updatingSearch() {
        $this->resetPage();
    }

    // automation paginate
    public function updatingCount() {
        $this->paginate = UserWorkspace::with(['user','role.role'])
        ->where('workspace_id', $this->workspace_id)
        ->count();
    }

    // automation filter
    public function updatingFilter($filter) {
        $this->filter = $filter;
    }
    
    // tags add email (tambah anggota)
    public function addEmail(){
        $email = trim($this->textareaValue);
        if ($email && !in_array($email, $this->emails)) {
            $this->emails[] = $email;
            $this->textareaValue = '';
        }
    }

    // tags hapus email (tambah anggota)
    public function removeEmail($index){
        unset($this->emails[$index]);
        $this->emails = array_values($this->emails);
    }
    
    // tambah anggota via link 
    public function updatingSelectedRole($role_id) {
        $this->reset('link_akses');
        $this->link_akses = env('APP_URL') . 'join-workspace/' .$this->shortID . '/' . $role_id;
    }
    
    // tambah anggota
    public function addData() {
        $this->validate([
            'role_id'   => 'required',
            'emails'    => 'required',
        ]);

        try {
            foreach ($this->emails as $email) {
                $user = User::where('email', $email)->first();

                if (!$user) {
                    $user = User::create([
                        'user_id' => Str::uuid(),
                        'name' => $email,
                        'email' => $email,
                        'password' => $email,
                        'verification_token' => Str::random(32),
                        'email_verified_at' => null,
                        'profile' => null,
                        'remember_token' => null,
                        'created_at'    => now(),
                    ]);
                    
                    $detailUser = DetailUserWorkspace::firstOrCreate(
                        ['nomor_induk' => '', 'tahun_ajaran' => now()->year, 'is_active' => '1','created_at'    => now(),]
                    );
    
                    UserWorkspace::firstOrCreate(
                        ['workspace_id' => $this->workspace_id, 'user_id' => $user->id],
                        ['detailUser_id' => $detailUser->id, 'rw_id' => $this->role_id, 'akun_terkait' => null]
                    );

                    $url = env('APP_URL') . 'verify-email/' . $user->verification_token . '/' . $this->shortID;

                    Mail::to($email)->send(new SendEmailWorkspace($user, $url));
                    flash('E-mail masuk workspace telah dikirim.', 'success');
                }else if(!$this->isUserInWorkspace($user)){
                    $detailUser = DetailUserWorkspace::firstOrCreate(
                        ['nomor_induk' => '', 'tahun_ajaran' => now()->year, 'is_active' => '1', 'created_at'    => now(),]
                    );
    
                    UserWorkspace::firstOrCreate(
                        ['workspace_id' => $this->workspace_id, 'user_id' => $user->id],
                        ['detailUser_id' => $detailUser->id, 'rw_id' => $this->role_id, 'akun_terkait' => null]
                    );
                    $url = env('APP_URL') . $this->shortID . '/';
                    Mail::to($email)->send(new SendEmailWorkspace($user, $url));
                    flash('E-mail masuk workspace telah dikirim.', 'success');
                }else{
                    flash('E-mail '.$email.' sudah terdaftar dalam workspace', 'error');
                }
                continue;

            }
            
            $this->reset(['emails', 'role_id', 'textareaValue']);
        }catch (\Exception $e) {
            flash($e, 'error');
        }
    }
    
    // cek apakah user sudah masuk di workspace
    public function isUserInWorkspace($user) {
        return DB::table('users_workspace')
            ->where('workspace_id', $this->workspace_id)
            ->where('user_id', $user->id)
            ->exists();
    }

    // update anggota
    public function updateData()  {
        $this->validate([
            'editRole'  => 'required|exists:roles,id',
            'is_active' => 'required',
            'selectedKait' => 'required'
        ]);
    
        try {
            $userWorkspace                  = UserWorkspace::findorFail($this->user_id);
            $detailUserWorkspace            = DetailUserWorkspace::findorFail($userWorkspace->detailUser_id);
            $detailUserWorkspace->is_active = $this->is_active;
            $userWorkspace->rw_id           = $this->editRole;
            $userWorkspace->akun_terkait    = $this->selectedKait;
            $userWorkspace->save();
            $detailUserWorkspace->save();
            UserWorkspace::where('workspace_id', $this->workspace_id)
            ->where('user_id', $this->selectedKait)
            ->update(['akun_terkait' => $userWorkspace->user_id]);

            flash('Berhasil mengubah anggota.', 'success');
            return redirect()->route('anggota-workspace',['workspace_id'=> $this->shortID]);
        } catch (\Throwable $e) {
            flash($e, 'error');
        }
    
    }

    // tinggal detail aktivitas dan raport belum
    public function render(){
        switch ($this->view) {
            case 'create' : 
                $shortID = $this->shortID;
                $role = RoleWorkspace::with('role')->where('workspace_id', $this->workspace_id)->get()->pluck('role.nama', 'role.id')->toArray();

                return view('livewire.user.admin.anggota.create',[
                    'shortID' => $shortID,
                    'role'    => $role
                ]);
                break;
            case 'edit':
                $shortID = $this->shortID;
                $role = RoleWorkspace::with('role')->where('workspace_id', $this->workspace_id)->get()->pluck('role.nama', 'role.id')->toArray();
                $active = [
                    0 => 'Nonaktif',
                    1 => 'Aktif'
                ];
                return view('livewire.user.admin.anggota.edit',[
                    'shortID'       => $shortID,
                    'role'          => $role,
                    'active'        => $active
                ]);
                break;
            case 'detail' :
                $shortID = $this->shortID; 
                return view('livewire.user.admin.anggota.detail',[
                    'shortID'       => $shortID,
                ]);
                break;
            default:
                $shortID    = $this->shortID;
                $filter     = $this->filter;
                $count      = $this->count;
                $search     = $this->search;
                $paginate   = $this->paginate;
                $actionButton = ['detail', 'edit'];
                $optionFilter = [
                    0 => 'Nonaktif',
                    1 => 'Aktif'
                ];
                $query   = UserWorkspace::with(['user','role.role', 'detailUser'])
                            ->where('workspace_id', $this->workspace_id)
                            ->whereHas('user', function ($query) use ($search) {
                                $query->where('name', 'like', '%' . $search . '%');
                            });

                            if ($filter !== null) {
                                $query->where(function ($q) use ($filter) {
                                    if ($filter == 1) {
                                        $q->whereNull('detailUser_id')
                                          ->orWhereHas('detailUser', function ($u) {
                                              $u->where('is_active', '1');
                                          });
                                    } elseif ($filter == 0) {
                                        $q->whereHas('detailUser', function ($u) {
                                            $u->where('is_active', '0');
                                        });
                                    }
                                });
                            }
                            if ($paginate != 10) {
                                $data = $query->paginate(10);
                            }else{
                                $data = $query->paginate($paginate);
                            }
                
                return view('livewire.user.admin.anggota.index',[
                    'shortID'    => $shortID,
                    'data'        => $data,
                    'optionFilter'=> $optionFilter,
                    'count'       => $count,
                    'actionButton'=> $actionButton
                ]);
            break;
        }
        
    }
}
