<?php

namespace App\Http\Controllers\workspace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function join() {
        return view('user.join_workspace');
    }
}
