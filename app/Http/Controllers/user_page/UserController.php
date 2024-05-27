<?php

namespace App\Http\Controllers\user_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function landing() {
        return view('user.landing');
    }

    public function profile() {
        return view('user.profile');
    }
}
