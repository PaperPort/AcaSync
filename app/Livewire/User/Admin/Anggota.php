<?php

namespace App\Livewire\User\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Anggota Workspace')]
class Anggota extends Component
{
    public function render()
    {
        return view('livewire.user.admin.anggota');
    }
}
