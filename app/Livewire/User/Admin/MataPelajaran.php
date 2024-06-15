<?php

namespace App\Livewire\User\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mata Pelajaran Workspace')]
class MataPelajaran extends Component
{
    public function render()
    {
        return view('livewire.user.admin.mata-pelajaran');
    }
}
