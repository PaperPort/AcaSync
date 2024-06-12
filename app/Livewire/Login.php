<?php

namespace App\Livewire;

use App\Mail\SendVerifRegisAcc;
use App\Models\Workspace;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Masuk Akun')]
class Login extends Component
{
    public $email, $password;
    public $remember = false;

    protected $rules = [
        'email'         => 'required|email',
        'password'      => 'required|string|min:8',
    ];

    public function login() {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password, 'remember' => $this->remember])) {
            $user = Auth::user();

            if (is_null($user->email_verified_at)) {
                Auth::logout();
                Mail::to($user->email)->send(new SendVerifRegisAcc($user->verification_token));
                return redirect()->route('login')->flash('Anda perlu verifikasi email terlebih dahulu.', 'error');
            }

            $workspace = Workspace::where('user_id', $user->id)->first();
            if ($workspace) {
                return redirect()->route('personal-landing');
            }else{
                return redirect()->route('admin/dashboard');
            }
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
