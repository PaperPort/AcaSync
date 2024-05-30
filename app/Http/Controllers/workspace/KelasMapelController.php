<?php

namespace App\Http\Controllers\workspace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelasMapelController extends Controller
{
    public function index() {
        return view('user.murid.timeline_mapel');
    }
}
