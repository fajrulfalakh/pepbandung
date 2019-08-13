<?php

namespace App\Http\Controllers;

use App\TKA_Geologi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class DataTKA_GeologiController extends Controller
{
    public function index() {
        $dataTKA_Geologi = TKA_Geologi::get();
        $notka_geologi = $this->createNoTKA_Geologi();
        return view('datatka_geologi.index', compact('dataTKA_Geologi','notka_geologi'));
    }

    protected function createNoTKA_Geologi() {
        $preffix = 'TKA-G-';
        $lasttka_geologi = TKA_Geologi::where(\DB::raw('LEFT(kd_tka_geologi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_tka_geologi, 4) as no_tka_geologi')->orderBy('no_tka_geologi', 'desc')->first();

        if (!empty($lasttka_geologi)) {
            $now = intval($lasttka_geologi->no_tka_geologi)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_tka_geologi' => 'required',
            'kd_tka_geologi' => 'required|unique:tka_geologi,kd_tka_geologi',
            'namatka_geologi' => 'required',
            'identitastka_geologi' => 'required',
            'tltka_geologi'=> 'required',
            'pendidikantka_geologi'=> 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data tka berhasil ditambahkan']);
        return redirect()->route('datatka_geologi.index');
    }

    public function show($id) {
        $tka_geologi = TKA_Geologi::where('id_tka_geologi', $id)->firstOrFail();
        return view('datatka_geologi/detail', compact('tka_geologi'))->render();
    }

    public function create(Request $request)
    {
        \App\TKA_Geologi::create($request->all());
        return redirect('/datatka_geologi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $tka_geologi = \App\TKA_Geologi::find($id);
        return view('datatka_geologi/edit',['datatka_geologi' => $tka_geologi]);
    }

    public function update(Request $request,$id)
    {
        $tka_geologi = \App\TKA_Geologi::find($id);
        $tka_geologi->update($request->all());
        return redirect('/datatka_geologi')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $tka_geologi = \App\TKA_Geologi::find($id);
        $tka_geologi->delete();
        return redirect()->route('datatka_geologi.index')->with('sukses','Data Berhasil Dihapus');
    }
}
