<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Soal3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Soal3()
    {
        return view('backend.user.soal3');
    }
}
