<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataMahasiswaController extends Controller
{
    public function index()
    {
        return view('biodatamahasiswa.index');
    }
}
