<?php

namespace App\Http\Controllers;

use App\Matakuliah_Geologi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataMatakuliah_GeologiController extends Controller
{
    public function index() {
        $dataMatakuliah_Geologi = Matakuliah_Geologi::get();
        $nomatakuliah_geologi = $this->createNoMatakuliah_Geologi();
        return view('datamatakuliah_geologi.index', compact('dataMatakuliah_Geologi','nomatakuliah_geologi'));
    }

    protected function createNoMatakuliah_Geologi() {
        $preffix = 'MG-';
        $lastmatakuliah_geologi = Matakuliah_Geologi::where(\DB::raw('LEFT(kd_matakuliah_geologi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_matakuliah_geologi, 4) as no_matakuliah_geologi')->orderBy('no_matakuliah_geologi', 'desc')->first();

        if (!empty($lastmatakuliah_geologi)) {
            $now = intval($lastmatakuliah_geologi->no_matakuliah_geologi)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_matakuliah_geologi' => 'required',
            'kd_matakuliah_geologi' => 'required',
            'namamatakuliah_geologi' => 'required',
            'semester' => 'required',
            'teori'=> 'required',
            'praktek' => 'required',
            'kerjalapang' => 'required'
        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data matakuliah_geologi berhasil ditambahkan']);
        return redirect()->route('datamatakuliah_geologi.index');
    }

    public function show($id) {
        $matakuliah_geologi = Matakuliah_Geologi::where('id_matakuliah_geologi', $id)->firstOrFail();
        return view('datamatakuliah_geologi/detail', compact('matakuliah_geologi'))->render();
    }

    public function create(Request $request)
    {
        \App\Matakuliah_Geologi::create($request->all());
        return redirect('/datamatakuliah_geologi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $matakuliah_geologi = \App\Matakuliah_Geologi::find($id);
        return view('datamatakuliah_geologi/edit',['datamatakuliah_geologi' => $matakuliah_geologi]);
    }

    public function update(Request $request,$id)
    {
        $matakuliah_geologi = \App\Matakuliah_Geologi::find($id);
        $matakuliah_geologi->update($request->all());
        return redirect('/datamatakuliah_geologi')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $matakuliah_geologi = \App\Matakuliah_Geologi::find($id);
        $matakuliah_geologi->delete();
        return redirect()->route('datamatakuliah_geologi.index')->with('sukses','Data Berhasil Dihapus');
    }


}
