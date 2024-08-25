<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

#[Title('Personal Profile')]
class Profile extends Component
{
    use WithFileUploads;
    public $view = 'index';
    public $user_id, $user;
    public $nama_lengkap, $email, $password, $password_confirmation,$profile;

    protected $rules = [
        'nama_lengkap'      => 'required|string|max:100',
        'email'             => 'required|email',
        'password'          => 'nullable|string|min:8|confirmed',
    ];

    public function mount() {
        $this->user_id = Session::get('user_id');
        $this->user    = User::findOrFail($this->user_id);

        $this->nama_lengkap = $this->user->name;
        $this->email        = $this->user->email;

    }

    public function editProfile() {
        try {
            if ($this->profile) {
                $filename = Str::random(16) . '.' . $this->profile->getClientOriginalExtension();
                $this->profile->storeAs('public/picture_profiles', $filename);
                $this->user->profile = 'picture_profiles/' . $filename;
            }
            
            $this->user->name   = $this->nama_lengkap;
            $this->user->email  = $this->email;
            if ($this->password) {
                $this->user->password = bcrypt($this->password);
            }
            $this->user->save();
            flash('Berhasil mengubah profil.', 'success');
            return redirect()->route('personal-profile');
        } catch (\Exception $e) {
            flash($e, 'error');
        }
    }

    public function render()
    {
        switch ($this->view) {
            case 'edit':
                return view('livewire.user.edit-profile');
                break;
            
            default:
                return view('livewire.user.profile');
                break;
        }
    }
}
