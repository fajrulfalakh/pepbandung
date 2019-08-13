<?php

namespace App\Http\Controllers;

use App\Cpl_Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataCpl_ProdiController extends Controller
{
    public function index() {
        $dataCpl_Prodi = Cpl_Prodi::get();
        $nocpl_prodi = $this->createNoCpl_Prodi();
        return view('datacpl_prodi.index', compact('dataCpl_Prodi','nocpl_prodi'));
    }

    protected function createNoCpl_Prodi() {
        $preffix = 'PGW-';
        $lastcpl_prodi = Cpl_Prodi::where(\DB::raw('LEFT(kd_cpl_prodi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_cpl_prodi, 4) as no_cpl_prodi')->orderBy('no_cpl_prodi', 'desc')->first();

        if (!empty($lastcpl_prodi)) {
            $now = intval($lastcpl_prodi->no_cpl_prodi)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_cpl_prodi' => 'required',
            'kd_cpl_prodi' => 'required|unique:cpl_prodi,kd_cpl_prodi',
            'namacpl_prodi' => 'required',
            'bahankajiancpl_prodi' => 'required',

        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data cpl_prodi berhasil ditambahkan']);
        return redirect()->route('datacpl_prodi.index');
    }

    public function show($id) {
        $cpl_prodi = Cpl_Prodi::where('id_cpl_prodi', $id)->firstOrFail();
        return view('datacpl_prodi/detail', compact('cpl_prodi'))->render();
    }

    public function create(Request $request)
    {
        \App\Cpl_Prodi::create($request->all());
        return redirect('/datacpl_prodi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $cpl_prodi = \App\Cpl_Prodi::find($id);
        return view('datacpl_prodi/edit',['datacpl_prodi' => $cpl_prodi]);
    }

    public function update(Request $request,$id)
    {
        $cpl_prodi = \App\Cpl_Prodi::find($id);
        $cpl_prodi->update($request->all());
        return redirect('/datacpl_prodi')->with('sukses','Data Berhasil Diupdate');
    }


    // public function update($id, Request $request) {
    //     $datadosen = Dosen::where('id_dosen', $id)->firstOrFail();

    //     $this->validate($request, [
    //         'gambar'=> 'required | mimes:jpeg,jpg,png | max:1000',
    //         'id_dosen' => 'required',
    //         'kd_dosen' => 'required|unique:dosen,kd_dosen',
    //         'namadosen' => 'required',
    //         'alamatdosen' => 'required',
    //         'jabatan'=> 'required'
    //     ]);
    //     $gambar = $request->file('gambar');
    //     $namaFile = $gambar->getClientOriginalName();
    //     $request->file('gambar')->move('uploadgambar', $namaFile);
    //     $datadosen->update($request->all());
    //     $datadosen->gambar = $namaFile;
    //     $datadosen->save();

    //     \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data Dosen berhasil diupdate']);
    //     return redirect()->route('datadosen.index');
    // }

    public function delete($id)
    {
        $cpl_prodi = \App\Cpl_Prodi::find($id);
        $cpl_prodi->delete();
        return redirect()->route('datacpl_prodi.index')->with('sukses','Data Berhasil Dihapus');
    }


}
