<?php

namespace App\Livewire;

use App\Mail\SendVerifRegisAcc;
use App\Models\User;
use App\Models\Workspace;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Register Workspacce')]
class RegisterWorkspace extends Component
{

    public $nama_workspace, $email, $password, $password_confirmation;
    public $accept = FALSE;

    protected $rules = [
        'nama_workspace'=> 'required|string|max:100|unique:users,name',
        'email'         => 'required|email|unique:users,email',
        'password'      => 'required|string|min:8|confirmed',
        'accept'        => 'accepted',
    ];

    public function add_workspace() {
        $this->validate();
        $user = User::create([
            'user_id'           => Str::uuid(5),
            'name'              => $this->nama_workspace,
            'email'             => $this->email,
            'password'          => Hash::make($this->password),
            'verification_token'=> Str::random(32)
        ]);

        $workspace = Workspace::create([
            'user_id'       => $user->id,
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
        return view('livewire.register-workspace');
    }
}
