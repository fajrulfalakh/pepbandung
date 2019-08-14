<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiSemesterController extends Controller
{
    public function index()
    {
        return view('nilaisemester.index');
    }
}
