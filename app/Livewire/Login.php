<?php

namespace App\Livewire;

use App\Mail\SendVerifRegisAcc;
use App\Models\UserWorkspace;
use App\Models\Workspace;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Cookie;
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

    public function mount() {
        $this->email = Cookie::get('email');
    }

    public function login() {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            if ($this->remember) {
                Cookie::queue('email', $this->email, 60 * 24 * 30); // 30 days
            } else {
                Cookie::queue(Cookie::forget('email'));
            }
            $user = Auth::user();
            Session::put('user_id', $user->id);
            if (is_null($user->email_verified_at)) {
                Auth::logout();
                Mail::to($user->email)->send(new SendVerifRegisAcc($user->verification_token));
                flash('Anda perlu verifikasi email terlebih dahulu.', 'error');
            }else{
                $workspace = Workspace::with('user')->where('user_id', $user->id)->first();
                $role = UserWorkspace::where([
                    ['workspace_id','=',$workspace->id],
                    ['user_id', '=',$user->id]
                ])->first();
                if ($workspace) {
                    $shortID = substr($workspace->user->user_id, 0,8);
                    Session::put([
                        'shortID'  => $shortID,
                        'id'       => $workspace->id,
                        'role_user' => $role->rw_id
                    ]);
                    return redirect()->route('dashboard-workspace', ['workspace_id'=> $shortID]);
                }else{
                    return redirect()->route('personal-landing');
                }
            }
        }else{
            flash('Cek kembali e-mail dan password yang Anda input.', 'error');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
