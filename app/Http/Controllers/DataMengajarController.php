<?php

namespace App\Http\Controllers;

use App\Mengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataMengajarController extends Controller
{
    public function index() {
        $dataMengajar = Mengajar::get();
        $nomengajar = $this->createNoMengajar();
        return view('datamengajar.index', compact('dataMengajar','nomengajar'));
    }

    protected function createNoMengajar() {
        $preffix = 'PGW-';
        $lastmengajar = Mengajar::where(\DB::raw('LEFT(kd_Mengajar, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_mengajar, 4) as no_mengajar')->orderBy('no_mengajar', 'desc')->first();

        if (!empty($lastmengajar)) {
            $now = intval($lastmengajar->no_mengajar)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_megajar' => 'required',
            'kd_mengajar' => 'required|unique:mengajar,kd_mengajar',
            'kelas' => 'required',
            'prodi' => 'required',
            'matkul'=> 'required',
            'ruangan'=> 'required',
            'dosenpengajar'=> 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data mengajar berhasil ditambahkan']);
        return redirect()->route('datamengajar.index');
    }

    public function show($id) {
        $mengajar = Mengajar::where('id_mengajar', $id)->firstOrFail();
        return view('datamengajar/detail', compact('mengajar'))->render();
    }

    public function create(Request $request)
    {
        \App\Mengajar::create($request->all());
        return redirect('/datamengajar')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $mengajar = \App\Mengajar::find($id);
        return view('datamengajar/edit',['datamengajar' => $mengajar]);
    }

    public function update(Request $request,$id)
    {
        $mengajar = \App\Mengajar::find($id);
        $mengajar->update($request->all());
        return redirect('/datamengajar')->with('sukses','Data Berhasil Diupdate');
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
        $mengajar = \App\Mengajar::find($id);
        $mengajar->delete();
        return redirect()->route('datamengajar.index')->with('sukses','Data Berhasil Dihapus');
    }


}
