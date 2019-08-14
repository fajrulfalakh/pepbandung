<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataOrangtuaController extends Controller
{
    public function index()
    {
        return view('orangtua.index');
    }

    public function show1() {
        return view('orangtua.detail1');
    }
    public function show2() {
        return view('orangtua.detail2');
    }
}
