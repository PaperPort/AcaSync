<?php

namespace App\Livewire\User\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Kelas Workspace')]
class Kelas extends Component
{
    public function render()
    {
        return view('livewire.user.admin.kelas');
    }
}
