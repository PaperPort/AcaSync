<?php

namespace App\Livewire\User\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Info Workspace')]
class InfoWorkspace extends Component
{
    public function render()
    {
        return view('livewire.user.admin.info-workspace');
    }
}
