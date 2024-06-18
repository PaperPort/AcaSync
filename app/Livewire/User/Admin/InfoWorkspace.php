<?php

namespace App\Livewire\User\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Info Workspace')]
class InfoWorkspace extends Component
{
    public $view = 'index';
    public function render()
    {
        switch ($this->view) {
            case 'edit':
                return view('livewire.user.admin.info-workspace.edit');
                break;
            
            default:
                return view('livewire.user.admin.info-workspace.index');
                break;
        }
        
    }
}
