<?php

namespace App\Livewire\User\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Role Workspace')]
class Role extends Component
{
    public function render()
    {
        return view('livewire.user.admin.role');
    }
}
