<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Personal Landing')]
class Landing extends Component
{
    public function render()
    {
        return view('livewire.user.landing');
    }
}
