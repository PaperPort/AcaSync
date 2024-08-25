<?php

namespace App\Livewire;

use App\Mail\SendVerifRegisAcc;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Register Akun')]

class RegisterAccount extends Component
{
    public $nama_lengkap, $email, $password, $password_confirmation;
    public $accept = FALSE;

    protected $rules = [
        'nama_lengkap'   => 'required|string|max:255',
        'email'         => 'required|email|unique:users,email',
        'password'      => 'required|string|min:8|confirmed',
        'accept'        => 'accepted',
    ];
    
    public function add_user() {
        
        $this->validate();
        $user = User::create([
            'user_id'           => Str::uuid(),
            'name'              => $this->nama_lengkap,
            'email'             => $this->email,
            'password'          => Hash::make($this->password),
            'verification_token'=> Str::random(32),
            'email_verified_at' => null,
            'profile'           => null,
            'remember_token'    => null,
            'created_at'        => now(),
        ]);

        try {
            Mail::to($user->email)->send(new SendVerifRegisAcc($user->verification_token));
            flash('Mohon cek email Anda untuk verifikasi akun Anda.', 'success');
        } catch (\Exception $e) {
            flash($e, 'error');
        }

        $this->reset(); 
    }

    public function render()
    {
        return view('livewire.register-account');
    }

    
}
