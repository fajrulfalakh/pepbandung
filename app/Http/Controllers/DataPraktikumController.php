<?php

namespace App\Http\Controllers;

use App\Praktikum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataPraktikumController extends Controller
{
    public function index() {
        $dataPraktikum = Praktikum::get();
        $nopraktikum = $this->createNoPraktikum();
        return view('datapraktikum.index', compact('dataPraktikum','nopraktikum'));
    }

    protected function createNoPraktikum() {
        $preffix = 'PGW-';
        $lastpraktikum = Praktikum::where(\DB::raw('LEFT(kd_praktikum, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_praktikum, 4) as no_praktikum')->orderBy('no_praktikum', 'desc')->first();

        if (!empty($lastpraktikum)) {
            $now = intval($lastpraktikum->no_praktikum)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'gambar'=> 'required|mimes:jpeg,jpg,png | max:1000',
            'id_praktikum' => 'required',
            'kd_praktikum' => 'required|unique:praktikum,kd_praktikum',
            'namapraktikum' => 'required',
            'ruanganpraktikum' => 'required',
            'jabatan'=> 'required'

        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data praktikum berhasil ditambahkan']);
        return redirect()->route('datapraktikum.index');
    }

    public function show($id) {
        $praktikum = Praktikum::where('id_praktikum', $id)->firstOrFail();
        return view('datapraktikum/detail', compact('praktikum'))->render();
    }

    public function create(Request $request)
    {
        \App\Praktikum::create($request->all());
        return redirect('/datapraktikum')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $praktikum = \App\Praktikum::find($id);
        return view('datapraktikum/edit',['datapraktikum' => $praktikum]);
    }

    public function update(Request $request,$id)
    {
        $praktikum = \App\Praktikum::find($id);
        $praktikum->update($request->all());
        return redirect('/datapraktikum')->with('sukses','Data Berhasil Diupdate');
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
        $praktikum = \App\Praktikum::find($id);
        $praktikum->delete();
        return redirect()->route('datapraktikum.index')->with('sukses','Data Berhasil Dihapus');
    }


}
