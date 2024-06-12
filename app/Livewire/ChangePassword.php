<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Ganti Password')]
class ChangePassword extends Component
{
    public function render()
    {
        return view('livewire.change-password');
    }
}
