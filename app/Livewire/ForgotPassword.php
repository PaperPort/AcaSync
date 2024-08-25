<?php

namespace App\Livewire;

use App\Mail\SendForgotPass;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str;

#[Title('Lupa Password')]
class ForgotPassword extends Component
{
    public $email;
    protected $rules = [
        'email' => 'required|email|'
    ];

    public function forgotPass() {
        $this->validate();

        $user = User::where('email', $this->email)->first();
        if ($user) {
            $verification_token = Str::random(32);
            $user->password = '';
            $user->verification_token = $verification_token;
            $user->save();
            try {
                Mail::to($user->email)->send(new SendForgotPass($verification_token));
                flash('Mohon cek email Anda untuk dapat mereset password ulang.', 'success');
                $this->reset();
            } catch (\Exception $e) {
                flash($e, 'error');
                $this->reset();
            }
        }else{
            flash('E-mail Anda tidak terdaftar. Silahkan isi kembali dengan e-mail yang telah terdaftar.', 'error');
            $this->reset();
        }
    }

    public function render()
    {
        return view('livewire.forgot-password');
    }
}
