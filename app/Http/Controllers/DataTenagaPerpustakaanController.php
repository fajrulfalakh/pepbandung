<?php

namespace App\Http\Controllers;

use App\TenagaPerpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class DataTenagaPerpustakaanController extends Controller
{
    public function index() {
        $dataTenagaPerpustakaan = TenagaPerpustakaan::get();
        $notenagaperpustakaan = $this->createNoTenagaPerpustakaan();
        return view('datatenagaperpustakaan.index', compact('dataTenagaPerpustakaan','notenagaperpustakaan'));
    }

    protected function createNoTenagaPerpustakaan() {
        $preffix = 'TKA-G-';
        $lasttenagaperpustakaan = TenagaPerpustakaan::where(\DB::raw('LEFT(kd_tenagaperpustakaan, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_tenagaperpustakaan, 4) as no_tenagaperpustakaan')->orderBy('no_tenagaperpustakaan', 'desc')->first();

        if (!empty($lasttenagaperpustakaan)) {
            $now = intval($lasttenagaperpustakaan->no_tenagaperpustakaan)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_tenagaperpustakaan' => 'required',
            'kd_tenagaperpustakaan' => 'required|unique:tenagaperpustakaan,kd_tenagaperpustakaan',
            'namatenagaperpustakaan' => 'required',
            'identitastenagaperpustakaan' => 'required',
            'tltenagaperpustakaan'=> 'required',
            'pendidikantenagaperpustakaan'=> 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data tka berhasil ditambahkan']);
        return redirect()->route('datatenagaperpustakaan.index');
    }

    public function show($id) {
        $tenagaperpustakaan = TenagaPerpustakaan::where('id_tenagaperpustakaan', $id)->firstOrFail();
        return view('datatenagaperpustakaan/detail', compact('tenagaperpustakaan'))->render();
    }

    public function create(Request $request)
    {
        \App\TenagaPerpustakaan::create($request->all());
        return redirect('/datatenagaperpustakaan')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $tenagaperpustakaan = \App\TenagaPerpustakaan::find($id);
        return view('datatenagaperpustakaan/edit',['datatenagaperpustakaan' => $tenagaperpustakaan]);
    }

    public function update(Request $request,$id)
    {
        $tenagaperpustakaan = \App\TenagaPerpustakaan::find($id);
        $tenagaperpustakaan->update($request->all());
        return redirect('/datatenagaperpustakaan')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $tenagaperpustakaan = \App\TenagaPerpustakaan::find($id);
        $tenagaperpustakaan->delete();
        return redirect()->route('datatenagaperpustakaan.index')->with('sukses','Data Berhasil Dihapus');
    }
}
