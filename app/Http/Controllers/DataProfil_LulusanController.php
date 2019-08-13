<?php

namespace App\Http\Controllers;

use App\Profil_Lulusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataProfil_LulusanController extends Controller
{
    public function index() {
        $dataProfil_Lulusan = Profil_Lulusan::get();
        $noprofil_lulusan = $this->createNoProfil_Lulusan();
        return view('dataProfil_Lulusan.index', compact('dataProfil_Lulusan','noprofil_lulusan'));
    }

    protected function createNoProfil_Lulusan() {
        $preffix = 'PGW-';
        $lastProfil_Lulusan = Profil_Lulusan::where(\DB::raw('LEFT(kd_profil_lulusan, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_profil_lulusan, 4) as no_profil_lulusan')->orderBy('no_profil_lulusan', 'desc')->first();

        if (!empty($lastProfi_Lulusan)) {
            $now = intval($lastProfil_Lulusan->no_profil_lulusan)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_profil_lulusan' => 'required',
            'kd_profil_lulusan' => 'required|unique:profil_lulusan,kd_profil_lulusan',
            'namaprofil_lulusan' => 'required',
            'keteranganprofil_lulusan' => 'required',
            'tahunajaran'=> 'required'

        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data profile_lulusan berhasil ditambahkan']);
        return redirect()->route('dataprofil_lulusan.index');
    }

    public function show($id) {
        $profil_lulusan = Profil_Lulusan::where('id_profil_lulusan', $id)->firstOrFail();
        return view('dataprofil_lulusan/detail', compact('profil_lulusan'))->render();
    }

    public function create(Request $request)
    {
        \App\Profil_Lulusan::create($request->all());
        return redirect('/dataprofil_lulusan')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $profil_lulusan = \App\Profil_Lulusan::find($id);
        return view('dataprofil_lulusan/edit',['dataprofil_lulusan' => $profil_lulusan]);
    }

    public function update(Request $request,$id)
    {
        $profil_lulusan = \App\Profil_Lulusan::find($id);
        $profil_lulusan->update($request->all());
        return redirect('/dataprofil_lulusan')->with('sukses','Data Berhasil Diupdate');
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
        $profil_lulusan = \App\Profil_Lulusan::find($id);
        $profil_lulusan->delete();
        return redirect()->route('dataprofil_lulusan.index')->with('sukses','Data Berhasil Dihapus');
    }


}
