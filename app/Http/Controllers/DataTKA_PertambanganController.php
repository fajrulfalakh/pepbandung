<?php

namespace App\Http\Controllers;

use App\TKA_Pertambangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class DataTKA_PertambanganController extends Controller
{
    public function index() {
        $dataTKA_Pertambangan = TKA_Pertambangan::get();
        $notka_pertambangan = $this->createNoTKA_Pertambangan();
        return view('datatka_pertambangan.index', compact('dataTKA_Pertambangan','notka_pertambangan'));
    }

    protected function createNoTKA_Pertambangan() {
        $preffix = 'TKA-P-';
        $lasttka_pertambangan = TKA_Pertambangan::where(\DB::raw('LEFT(kd_tka_pertambangan, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_tka_pertambangan, 4) as no_tka_pertambangan')->orderBy('no_tka_pertambangan', 'desc')->first();

        if (!empty($lasttka_pertambangan)) {
            $now = intval($lasttka_pertambangan->no_tka_pertambangan)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_tka_pertambangan' => 'required',
            'kd_tka_pertambangan' => 'required|unique:tka_pertambangan,kd_tka_pertambangan',
            'namatka_pertambangan' => 'required',
            'identitastka_pertambangan' => 'required',
            'tltka_pertambangan'=> 'required',
            'pendidikantka_pertambangan'=> 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data tka berhasil ditambahkan']);
        return redirect()->route('datatka_pertambangan.index');
    }

    public function show($id) {
        $tka_pertambangan = TKA_Pertambangan::where('id_tka_pertambangan', $id)->firstOrFail();
        return view('datatka_pertambangan/detail', compact('tka_pertambangan'))->render();
    }

    public function create(Request $request)
    {
        \App\TKA_Pertambangan::create($request->all());
        return redirect('/datatka_pertambangan')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $tka_pertambangan = \App\TKA_Pertambangan::find($id);
        return view('datatka_pertambangan/edit',['datatka_pertambangan' => $tka_pertambangan]);
    }

    public function update(Request $request,$id)
    {
        $tka_pertambangan = \App\TKA_Pertambangan::find($id);
        $tka_pertambangan->update($request->all());
        return redirect('/datatka_pertambangan')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $tka_pertambangan = \App\TKA_Pertambangan::find($id);
        $tka_pertambangan->delete();
        return redirect()->route('datatka_pertambangan.index')->with('sukses','Data Berhasil Dihapus');
    }


}
