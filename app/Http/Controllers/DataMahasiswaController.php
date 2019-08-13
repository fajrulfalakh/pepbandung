<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataMahasiswaController extends Controller
{
    public function index() {
        $dataMahasiswa = Mahasiswa::get();
        $nomahasiswa = $this->createNoMahasiswa();
        return view('datamahasiswa.index', compact('dataMahasiswa','nomahasiswa'));
    }

    protected function createNoMahasiswa() {
        $preffix = 'MHS-';
        $lastmahasiswa = Mahasiswa::where(\DB::raw('LEFT(kd_mahasiswa, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_mahasiswa, 4) as no_mahasiswa')->orderBy('no_mahasiswa', 'desc')->first();

        if (!empty($lastmahasiswa)) {
            $now = intval($lastmahasiswa->no_mahasiswa)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_mahasiswa' => 'required',
            'kd_mahasiswa' => 'required',
            'namamahasiswa' => 'required',
            'alamatmahasiswa' => 'required',
            'jabatan'=> 'required'
        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data mahasiswa berhasil ditambahkan']);
        return redirect()->route('datamahasiswa.index');
    }

    public function show($id) {
        $mahasiswa = Mahasiswa::where('id_mahasiswa', $id)->firstOrFail();
        return view('datamahasiswa/detail', compact('mahasiswa'))->render();
    }

    public function create(Request $request)
    {
        \App\Mahasiswa::create($request->all());
        return redirect('/datamahasiswa')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        return view('datamahasiswa/edit',['datamahasiswa' => $mahasiswa]);
    }

    public function update(Request $request,$id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/datamahasiswa')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('datamahasiswa.index')->with('sukses','Data Berhasil Dihapus');
    }


}
