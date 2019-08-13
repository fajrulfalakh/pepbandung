<?php

namespace App\Http\Controllers;

use App\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataBeasiswaController extends Controller
{
    public function index() {
        $dataBeasiswa = Beasiswa::get();
        $nobeasiswa = $this->createNoBeasiswa();
        return view('databeasiswa.index', compact('dataBeasiswa','nobeasiswa'));
    }

    protected function createNoBeasiswa() {
        $preffix = 'BSW-';
        $lastbeasiswa = Beasiswa::where(\DB::raw('LEFT(kd_beasiswa, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_beasiswa, 4) as no_beasiswa')->orderBy('no_beasiswa', 'desc')->first();

        if (!empty($lastbeasiswa)) {
            $now = intval($lastbeasiswa->no_beasiswa)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_beasiswa' => 'required',
            'kd_beasiswa' => 'required|unique:beasiswa,kd_beasiswa',
            'namabeasiswa' => 'required',
            'jenisbeasiswa' => 'required',
            'tanggalbeasiswa'=> 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data beasiswa berhasil ditambahkan']);
        return redirect()->route('databeasiswa.index');
    }

    public function show($id) {
        $beasiswa = Beasiswa::where('id_beasiswa', $id)->firstOrFail();
        return view('databeasiswa/detail', compact('beasiswa'))->render();
    }

    public function create(Request $request)
    {
        \App\Beasiswa::create($request->all());
        return redirect('/databeasiswa')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $beasiswa = \App\Beasiswa::find($id);
        return view('databeasiswa/edit',['databeasiswa' => $beasiswa]);
    }

    public function update(Request $request,$id)
    {
        $beasiswa = \App\Beasiswa::find($id);
        $beasiswa->update($request->all());
        return redirect('/databeasiswa')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $beasiswa = \App\Beasiswa::find($id);
        $beasiswa->delete();
        return redirect()->route('databeasiswa.index')->with('sukses','Data Berhasil Dihapus');
    }


}
