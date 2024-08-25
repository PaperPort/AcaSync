<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

    public function logout() {
        DB::table('sessions')->where('user_id', Auth::id())->delete();
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
