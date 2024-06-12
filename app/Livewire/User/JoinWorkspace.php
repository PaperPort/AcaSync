<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Gabung Workspace')]
class JoinWorkspace extends Component
{
    public function render()
    {
        return view('livewire.user.join-workspace');
    }
}
