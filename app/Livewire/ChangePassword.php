<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Ganti Password')]
class ChangePassword extends Component
{
    public $user, $password, $password_confirmation, $user_id;
    protected $rules = [
        'password'      => 'required|string|min:8|confirmed',
    ];

    public function mount($token) {
        $this->user = User::where('verification_token', $token)->firstOrFail();
        $this->user_id = $this->user->id;
        if ($this->user) {
            $this->user->verification_token = null;
            $this->user->updated_at = now();
            $this->user->save();
        }else{
            flash('Kembali ke email untuk melakukan akses halaman reset password.', 'error');
        }
    }

    public function resetPass() {
        $this->validate();
        $user = User::findOrFail($this->user_id);
        $user->password = Hash::make($this->password);
        $user->save();
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.change-password');
    }
}
