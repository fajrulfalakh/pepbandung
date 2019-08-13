<?php

namespace App\Http\Controllers;

use App\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataUjianController extends Controller
{
    public function index() {
        $dataUjian = Ujian::get();
        $noujian = $this->createNoUjian();
        return view('dataujian.index', compact('dataUjian','noujian'));
    }

    protected function createNoUjian() {
        $preffix = 'PGW-';
        $lastujian = Ujian::where(\DB::raw('LEFT(kd_ujian, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_ujian, 4) as no_ujian')->orderBy('no_ujian', 'desc')->first();

        if (!empty($lastujian)) {
            $now = intval($lastujian->no_ujian)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_ujian' => 'required',
            'kd_ujian' => 'required|unique:ujian,kd_ujian',
            'matkulujian' => 'required',
            'kelas' => 'required',
            'ruangujian'=> 'required'

        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data ujian berhasil ditambahkan']);
        return redirect()->route('dataujian.index');
    }

    public function show($id) {
        $ujian = Ujian::where('id_ujian', $id)->firstOrFail();
        return view('dataujian/detail', compact('ujian'))->render();
    }

    public function create(Request $request)
    {
        \App\Ujian::create($request->all());
        return redirect('/dataujian')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $ujian = \App\Ujian::find($id);
        return view('dataujian/edit',['dataujian' => $ujian]);
    }

    public function update(Request $request,$id)
    {
        $ujian = \App\Ujian::find($id);
        $ujian->update($request->all());
        return redirect('/dataujian')->with('sukses','Data Berhasil Diupdate');
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
        $ujian = \App\Ujian::find($id);
        $ujian->delete();
        return redirect()->route('dataujian.index')->with('sukses','Data Berhasil Dihapus');
    }


}
