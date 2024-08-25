<?php

namespace App\Livewire\User;

use App\Models\User;
use App\Models\UserWorkspace;
use App\Models\Workspace;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Personal Landing')]
class Landing extends Component
{
    public $user_id, $user, $user_workspace, $userShort;

    public function mount() {
        $this->user_id = Session::get('user_id');
        $this->user    = User::findOrFail($this->user_id);
        $this->userShort     = substr($this->user->user_id,0,8);

        $this->user_workspace = UserWorkspace::with([ 'workspace', 'workspace.user'])->where('user_id', $this->user_id)->get()->toArray();
        
    }

    public function enterWorkspace($id) {
        $workspace = Workspace::with('user')->findOrFail($id);
        $shortID = substr($workspace->user->user_id,0,8);
        Session::put('shortID', $shortID);
        Session::put('id', $id);
        Session::put('userShort', $this->userShort);

        $role = UserWorkspace::where([
            ['workspace_id','=',$id],
            ['user_id', '=',$this->user_id]
        ])->first();
        if ($role->rw_id == 5) {
            Session::put('role_user', $role->rw_id);
            Session::put('userWorkspace_id', $role->id);
            return redirect()->route('dashboard-user',['user_id'=> $this->userShort, 'workspace_id'=> $shortID]);
        }else{
            Session::put('role_user', $role->rw_id);
            return redirect()->route('dashboard-workspace',[ 'workspace_id'=> $shortID]);
        }
    }

    public function render()
    {
        return view('livewire.user.landing');
    }
}
