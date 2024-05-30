<?php

namespace App\Http\Controllers\workspace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function join() {
        return view('user.join_workspace');
    }

    public function join_code() {
        return view('user.join_code');
    }

    public function dashboard() {
        return view('user.dahboard_workspace');
    }
}
