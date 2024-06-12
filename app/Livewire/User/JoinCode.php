<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Gabung Workspace')]
class JoinCode extends Component
{
    public function render()
    {
        return view('livewire.user.join-code');
    }
}
