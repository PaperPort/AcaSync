<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Syarat dan Penggunaan')]
class TermsOfUse extends Component
{
    public function render()
    {
        return view('livewire.terms-of-use');
    }
}
