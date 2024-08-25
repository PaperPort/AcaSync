<?php

namespace App\Livewire\User\Murid;

use App\Models\JoinKelasWorkspace;
use App\Models\KelasMapelWorkspace;
use App\Models\User;
use App\Models\Workspace;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Dashboard Workspace')]
class Dashboard extends Component
{
    public $user_id, $user, $workspace_id, $userShort, $role_user, $userWorkspace_id;
    public $workspace, $kelas_wali, $mapel;

    public function mount() {
        $this->user_id          = Session::get('user_id');
        $this->user             = User::findOrFail($this->user_id);
        $this->workspace_id     = Session::get('shortID');
        $this->userWorkspace_id = Session::get('userWorkspace_id');
        $this->userShort        = Session::get('userShort');
        $this->role_user        = Session::get('role_user');

        $this->workspace    = Workspace::with('user')
                            ->whereHas('user', function ($q) {
                                $q->where('user_id', 'like', '%'.$this->workspace_id.'%');
                            })->first();
        $userJoinKelas = JoinKelasWorkspace::where('userWorkspace_id', $this->userWorkspace_id)->get()->toArray();
        
        foreach ($userJoinKelas as $ujk) {
            $this->mapel = KelasMapelWorkspace::with(['kelasWorkspace.detailKelas','mapelWorkspace.detailMapel','guruMapel.user'])->where('kelasWorkspace_id', $ujk['kelasWorkspace_id'])->get()->toArray();
        }
    }
    public function render()
    {
        return view('livewire.user.murid.dashboard');
    }
}
