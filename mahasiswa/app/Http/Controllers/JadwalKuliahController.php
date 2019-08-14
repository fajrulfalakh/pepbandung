<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalKuliahController extends Controller
{
    public function index()
    {
        return view('jadwalkuliah.index');
    }
}
