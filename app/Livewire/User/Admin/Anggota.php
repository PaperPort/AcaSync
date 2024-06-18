<?php

namespace App\Livewire\User\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Anggota Workspace')]
class Anggota extends Component
{
    public $view = 'index';
    public function render()
    {
        switch ($this->view) {
            case 'create' : 
                return view('livewire.user.admin.anggota.create');
                break;
            case 'edit':
                return view('livewire.user.admin.anggota.edit');
                break;
            case 'detail' : 
                return view('livewire.user.admin.anggota.detail');
                break;
            case 'delete' : 
                return view('livewire.user.admin.anggota.index');
                break;
            default:
                return view('livewire.user.admin.anggota.index');
            break;
        }
        
    }
}
