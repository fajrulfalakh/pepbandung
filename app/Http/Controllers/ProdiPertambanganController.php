<?php

namespace App\Http\Controllers;

use App\ProdiPertambangan;
use Illuminate\Http\Request;

class ProdiPertambanganController extends Controller
{
    public function index() {
        $prodi = ProdiPertambangan::get();
        $nomisi = $this->createNoMisi();
        return view('prodiPertambangan.index', compact('prodi','nomisi'));
    }

    protected function createNoMisi() {
        $preffix = 'PRD-P-';
        $lastprodi = ProdiPertambangan::where(\DB::raw('LEFT(kd_misi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_misi, 4) as no_misi')->orderBy('no_misi', 'desc')->first();

        if (!empty($lastprodi)) {
            $now = intval($lastprodi->no_misi)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_prodi' => 'required',
            'visi' => 'required',
            'kd_misi' => 'required|unique:prodiPertambangan,kd_prodi',
            'misi' => 'required',
            'tujuan' => 'required',

        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data Prodi berhasil ditambahkan']);
        return redirect()->route('prodiPertambangan.index');
    }

    public function show($id) {
        $prodi = ProdiPertambangan::where('id_prodi', $id)->firstOrFail();
        return view('prodiPertambangan/detail', compact('prodi'))->render();
    }

    public function create(Request $request)
    {
        \App\ProdiPertambangan::create($request->all());
        return redirect('/prodiPertambangan')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $prodi = \App\ProdiPertambangan::find($id);
        return view('prodiPertambangan/edit',['prodi' => $prodi]);
    }

    public function update(Request $request,$id)
    {
        $prodi = \App\ProdiPertambangan::find($id);
        $prodi->update($request->all());
        return redirect('/prodiPertambangan')->with('sukses','Data Berhasil Diupdate');
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
        $prodi = \App\ProdiPertambangan::find($id);
        $prodi->delete();
        return redirect()->route('prodiPertambangan.index')->with('sukses','Data Berhasil Dihapus');
    }
}
