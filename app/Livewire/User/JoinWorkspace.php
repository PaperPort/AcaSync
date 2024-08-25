<?php

namespace App\Livewire\User;

use App\Models\DetailUserWorkspace;
use App\Models\User;
use App\Models\UserWorkspace;
use App\Models\Workspace;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Gabung Workspace')]
class JoinWorkspace extends Component
{
    public $search, $workspace;
    public $workspace_id, $kode_akses;
    public $showModal = false;
    public $user_id, $user;


    public function mount()  {
        $this->user_id = Session::get('user_id');
        $this->user    = User::findOrFail($this->user_id);
    }
    // open close modal live
    public function toggleModal($id) {
        $this->showModal = !$this->showModal;
        $this->reset(['workspace_id', 'kode_akses']);
        $this->workspace_id = $id;
    }

    // update search workspace
    public function updatedSearch() {
        if ($this->search == '') {
            $this->workspace = '';
        }else{
            $this->searchWorkspace();
        }
    }

    // search workspace
    public function searchWorkspace() {
        $search = $this->search;
        if ($search != '') {
            $joinedWorkspaceIds  = UserWorkspace::where(
                'user_id', $this->user_id)->pluck('workspace_id')->all();
            $this->workspace = Workspace::with('user')
                    ->whereHas('user', function ($q) use ($search) {
                        $q->where('name', 'like', '%' . $search . '%')
                            ->orWhere('user_id', 'like', '%' . $search . '%');
                    })
                    ->whereNotIn('id', $joinedWorkspaceIds)
                    ->get()->toArray();
        }
    }

    // join workspace
    public function joinWorkspace() {
        $this->validate([
            'workspace_id'  => 'required',
            'kode_akses'    => 'required|min:16'
        ]);
        
        $isUserinWorkspace = UserWorkspace::where([
            ['workspace_id', '=', $this->workspace_id],
            ['user_id', '=', $this->user_id]
        ])->exists();
        
        $workspace = Workspace::with('user')->where([
            ['id', '=', $this->workspace_id],
            ['kode_akses', '=',$this->kode_akses]
        ])->first();

        if (is_null($workspace)) {
            flash('Pastikan sudah memasukkan kode akses dengan benar.', 'error');
        }else if(!$isUserinWorkspace) {
            $shortID    = substr($workspace->user->user_id, 0,8);
            $user       = User::findorFail($this->user_id);
            $userShort  = substr($user->user_id,0,8);
            $detailUser = DetailUserWorkspace::firstOrCreate(
                ['nomor_induk' => '', 'tahun_ajaran' => now()->year, 'is_active' => '1', 'created_at'    => now(),]
            );

            UserWorkspace::firstOrCreate(
                ['workspace_id' => $this->workspace_id, 'user_id' => $this->user_id],
                ['detailUser_id' => $detailUser->id, 'rw_id' => null, 'akun_terkait' => null]
            );
            return redirect()->route('dashboard-user', ['workspace_id' => $shortID, 'user_id' => $userShort]);
        }else{
            flash('Anda sudah menjadi anggota workspace ini.', 'error');
        }

        $this->showModal = !$this->showModal;
        $this->reset(['workspace_id', 'kode_akses']);
    }

    public function render()
    {
        return view('livewire.user.join-workspace');
    }
}
