<?php

namespace App\Http\Controllers;

use App\ProdiMetalurgi;
use Illuminate\Http\Request;

class ProdiMetalurgiController extends Controller
{
    public function index() {
        $prodi = ProdiMetalurgi::get();
        $nomisi = $this->createNoMisi();
        return view('prodiMetalurgi.index', compact('prodi','nomisi'));
    }

    protected function createNoMisi() {
        $preffix = 'PRD-M-';
        $lastprodi = ProdiMetalurgi::where(\DB::raw('LEFT(kd_misi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_misi, 4) as no_misi')->orderBy('no_misi', 'desc')->first();

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
            'kd_misi' => 'required|unique:prodiMetalurgi,kd_prodi',
            'misi' => 'required',
            'tujuan' => 'required',

        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data Prodi berhasil ditambahkan']);
        return redirect()->route('prodiMetalurgi.index');
    }

    public function show($id) {
        $prodi = ProdiMetalurgi::where('id_prodi', $id)->firstOrFail();
        return view('prodiMetalurgi/detail', compact('prodi'))->render();
    }

    public function create(Request $request)
    {
        \App\ProdiMetalurgi::create($request->all());
        return redirect('/prodiMetalurgi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $prodi = \App\ProdiMetalurgi::find($id);
        return view('prodiMetalurgi/edit',['prodi' => $prodi]);
    }

    public function update(Request $request,$id)
    {
        $prodi = \App\ProdiMetalurgi::find($id);
        $prodi->update($request->all());
        return redirect('/prodiMetalurgi')->with('sukses','Data Berhasil Diupdate');
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
        $prodi = \App\ProdiMetalurgi::find($id);
        $prodi->delete();
        return redirect()->route('prodiMetalurgi.index')->with('sukses','Data Berhasil Dihapus');
    }
}
