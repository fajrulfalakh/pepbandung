<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataPegawaiController extends Controller
{
    public function index() {
        $dataPegawai = Pegawai::get();
        $nopegawai = $this->createNoPegawai();
        return view('datapegawai.index', compact('dataPegawai','nopegawai'));
    }

    protected function createNoPegawai() {
        $preffix = 'PGW-';
        $lastpegawai = Pegawai::where(\DB::raw('LEFT(kd_pegawai, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_pegawai, 4) as no_pegawai')->orderBy('no_pegawai', 'desc')->first();

        if (!empty($lastpegawai)) {
            $now = intval($lastpegawai->no_pegawai)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'gambar'=> 'required|mimes:jpeg,jpg,png | max:1000',
            'id_pegawai' => 'required',
            'kd_pegawai' => 'required|unique:pegawai,kd_pegawai',
            'namapegawai' => 'required',
            'alamatpegawai' => 'required',
            'jabatan'=> 'required'

        ]);
        $gambar = $request->file('gambar');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('gambar')->move('uploadgambar', $namaFile);
        $do = new Pegawai($request->all());
        $do->gambar = $namaFile;
        $do->save();

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data pegawai berhasil ditambahkan']);
        return redirect()->route('datapegawai.index');
    }

    public function show($id) {
        $pegawai = Pegawai::where('id_pegawai', $id)->firstOrFail();
        return view('datapegawai/detail', compact('pegawai'))->render();
    }

    public function create(Request $request)
    {
        \App\Pegawai::create($request->all());
        return redirect('/datapegawai')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $pegawai = \App\Pegawai::find($id);
        return view('datapegawai/edit',['datapegawai' => $pegawai]);
    }

    public function update(Request $request,$id)
    {
        $pegawai = \App\Pegawai::find($id);
        $pegawai->update($request->all());
        return redirect('/datapegawai')->with('sukses','Data Berhasil Diupdate');
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
        $pegawai = \App\Pegawai::find($id);
        $pegawai->delete();
        return redirect()->route('datapegawai.index')->with('sukses','Data Berhasil Dihapus');
    }


}
