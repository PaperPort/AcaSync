<?php

namespace App\Http\Controllers\front_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function login() {
        return view('login');
    }

    public function register_account() {
        return view('register_account');
    }

    function register_workspace() {
        return view('register_workspace');
    }
}
