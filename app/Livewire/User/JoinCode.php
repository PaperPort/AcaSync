<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\User;
use App\Models\UserWorkspace;
use App\Models\DetailUserWorkspace;
use App\Mail\SendEmailWorkspace;
use App\Models\Workspace;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

#[Title('Gabung Workspace')]
class JoinCode extends Component
{
    public $workspace_id, $shortID, $role_id, $kode_akses, $email;

    public function mount($workspace_id, $role_id) {
        $this->role_id = $role_id;
        $this->shortID = $workspace_id;
        // get ID Workspace from short UUID
        $a = UserWorkspace::with('user', 'workspace')->whereHas('user', function($query) use($workspace_id){
            $query->where('user_id', 'like', '%' . $workspace_id . '%');
        })->get();
        foreach ($a as $a) {
            $this->workspace_id = $a->workspace_id;
        }
    }

    public function joinWorkspace() {
        $this->validate([
            'email' => 'required',
            'kode_akses' => 'required'
        ]);

        $user = User::where('email', $this->email)->first();
        $kode_akses = Workspace::where([
            ['id', '=', $this->workspace_id],
            ['kode_akses', '=',$this->kode_akses]
        ])->first();
        if (is_null($kode_akses)) {
            flash('Pastikan sudah memasukkan kode akses yang benar.', 'error');
        }else{
            if (!$user) {
                $user = User::create([
                    'user_id' => Str::uuid(),
                    'name' => $this->email,
                    'email' => $this->email,
                    'password' => $this->email,
                    'verification_token' => Str::random(32),
                    'email_verified_at' => null,
                    'profile' => null,
                    'remember_token' => null,
                    'created_at'    => now(),
                ]);
                
                $detailUser = DetailUserWorkspace::firstOrCreate(
                    ['nomor_induk' => '', 'tahun_ajaran' => now()->year, 'is_active' => '1', 'created_at'    => now(),]
                );

                UserWorkspace::firstOrCreate(
                    ['workspace_id' => $this->workspace_id, 'user_id' => $user->id],
                    ['detailUser_id' => $detailUser->id, 'rw_id' => $this->role_id, 'akun_terkait' => null]
                );

                $url = env('APP_URL') . 'verify-email/' . $user->verification_token . '/' . $this->shortID;

                Mail::to($this->email)->send(new SendEmailWorkspace($user, $url));
                flash('E-mail verifikasi sudah terkirim. Silahkan verifikasi terlebih dahulu sebelum masuk workspace.', 'success');
            }else if(!$this->isUserInWorkspace($user)){
                $detailUser = DetailUserWorkspace::firstOrCreate(
                    ['nomor_induk' => '', 'tahun_ajaran' => now()->year, 'is_active' => '1', 'created_at'    => now(),]
                );

                UserWorkspace::firstOrCreate(
                    ['workspace_id' => $this->workspace_id, 'user_id' => $user->id],
                    ['detailUser_id' => $detailUser->id, 'rw_id' => $this->role_id, 'akun_terkait' => null]
                );
                return redirect()->route('info-workspace', ['workspace_id' => $this->shortID]);
            }else{
                flash('E-mail '.$this->email.' sudah terdaftar dalam workspace.', 'error');
            }
        }
    }

    public function isUserInWorkspace($user) {
        return DB::table('users_workspace')
            ->where('workspace_id', $this->workspace_id)
            ->where('user_id', $user->id)
            ->exists();
    }


    public function render()
    {
        return view('livewire.user.join-code');
    }
}
