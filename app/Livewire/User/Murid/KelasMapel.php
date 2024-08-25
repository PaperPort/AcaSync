<?php

namespace App\Livewire\User\Murid;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Kelas Mata Pelajaran | Timeline')]

class KelasMapel extends Component
{
    public $user_id, $user, $workspace_id, $userShort, $role_user, $userWorkspace_id, $kelas_id, $mapel_id;
    public function mount($kelas_id) {
        $this->user_id          = Session::get('user_id');
        $this->user             = User::findOrFail($this->user_id);
        $this->workspace_id     = Session::get('shortID');
        $this->userWorkspace_id = Session::get('userWorkspace_id');
        $this->userShort        = Session::get('userShort');
        $this->role_user        = Session::get('role_user');
        $this->kelas_id         = substr($kelas_id, 0, -1);
        $this->mapel_id         = substr($kelas_id,  -1);
    }
    public function render()
    {
        return view('livewire.user.murid.kelas-mapel');
    }
}
