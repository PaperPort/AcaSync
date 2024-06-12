<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Personal Profile')]
class Profile extends Component
{
    public function render()
    {
        return view('livewire.user.profile');
    }
}
