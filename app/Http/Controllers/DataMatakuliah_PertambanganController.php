<?php

namespace App\Http\Controllers;

use App\Matakuliah_Pertambangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataMatakuliah_PertambanganController extends Controller
{
    public function index() {
        $dataMatakuliah_Pertambangan = Matakuliah_Pertambangan::get();
        $nomatakuliah_pertambangan = $this->createNoMatakuliah_Pertambangan();
        return view('datamatakuliah_pertambangan.index', compact('dataMatakuliah_Pertambangan','nomatakuliah_pertambangan'));
    }

    protected function createNoMatakuliah_Pertambangan() {
        $preffix = 'MP-';
        $lastmatakuliah_pertambangan = Matakuliah_Pertambangan::where(\DB::raw('LEFT(kd_matakuliah_pertambangan, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_matakuliah_pertambangan, 4) as no_matakuliah_pertambangan')->orderBy('no_matakuliah_pertambangan', 'desc')->first();

        if (!empty($lastmatakuliah_pertambangan)) {
            $now = intval($lastmatakuliah_pertambangan->no_matakuliah_pertambangan)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_matakuliah_pertambangan' => 'required',
            'kd_matakuliah_pertambangan' => 'required',
            'namamatakuliah_pertambangan' => 'required',
            'semester' => 'required',
            'teori'=> 'required',
            'praktek' => 'required',
            'kerjalapang' => 'required'
        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data matakuliah_pertambangan berhasil ditambahkan']);
        return redirect()->route('datamatakuliah_pertambangan.index');
    }

    public function show($id) {
        $matakuliah_pertambangan = Matakuliah_Pertambangan::where('id_matakuliah_pertambangan', $id)->firstOrFail();
        return view('datamatakuliah_pertambangan/detail', compact('matakuliah_pertambangan'))->render();
    }

    public function create(Request $request)
    {
        \App\Matakuliah_Pertambangan::create($request->all());
        return redirect('/datamatakuliah_pertambangan')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $matakuliah_pertambangan = \App\Matakuliah_Pertambangan::find($id);
        return view('datamatakuliah_pertambangan/edit',['datamatakuliah_pertambangan' => $matakuliah_pertambangan]);
    }

    public function update(Request $request,$id)
    {
        $matakuliah_pertambangan = \App\Matakuliah_Pertambangan::find($id);
        $matakuliah_pertambangan->update($request->all());
        return redirect('/datamatakuliah_pertambangan')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $matakuliah_pertambangan = \App\Matakuliah_Pertambangan::find($id);
        $matakuliah_pertambangan->delete();
        return redirect()->route('datamatakuliah_pertambangan.index')->with('sukses','Data Berhasil Dihapus');
    }


}
