<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KHSController extends Controller
{
    public function index()
    {
        return view('khs.index');
    }
}
