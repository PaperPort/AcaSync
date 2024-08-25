<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

#[Title('Dashboard Workspace')]
class Dashboard extends Component
{
    public $shortID, $workspace_id, $user_id;
    public function mount($guard = null) {
        // dd(Session::get('userShort'));
        $this->user_id = Session::get('user_id');
        if (Session::get('shortID')) {
            $this->shortID = Session::get('shortID');
            $this->workspace_id = Session::get('id');
            // dd($this->shortID);
        }
    }
    public function render()
    {
        return view('livewire.user.dashboard');
    }
}
