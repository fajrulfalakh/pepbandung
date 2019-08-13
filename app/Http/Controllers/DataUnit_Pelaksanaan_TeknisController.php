<?php

namespace App\Http\Controllers;

use App\Unit_Pelaksanaan_Teknis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataUnit_Pelaksanaan_TeknisController extends Controller
{
    public function index() {
        $dataUnit_Pelaksanaan_Teknis = Unit_Pelaksanaan_Teknis::get();
        $nounit_pelaksanaan_teknis = $this->createNoUnit_Pelaksanaan_Teknis();
        return view('dataunit_pelaksanaan_teknis.index', compact('dataUnit_Pelaksanaan_Teknis','nounit_pelaksanaan_teknis'));
    }

    protected function createNoUnit_Pelaksanaan_Teknis() {
        $preffix = 'UPT-';
        $lastunit_pelaksanaan_teknis = Unit_Pelaksanaan_Teknis::where(\DB::raw('LEFT(kd_unit_pelaksanaan_teknis, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_unit_pelaksanaan_teknis, 4) as no_unit_pelaksanaan_teknis')->orderBy('no_unit_pelaksanaan_teknis', 'desc')->first();

        if (!empty($lastunit_pelaksanaan_teknis)) {
            $now = intval($lastunit_pelaksanaan_teknis->no_unit_pelaksanaan_teknis)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_unit_pelaksanaan_teknis' => 'required',
            'kd_unit_pelaksanaan_teknis' => 'required|unique:unit_pelaksanaan_teknis,kd_unit_pelaksanaan_teknis',
            'namaunit_pelaksanaan_teknis' => 'required',
            'jenisunit_pelaksanaan_teknis' => 'required',
            'tanggalunit_pelaksanaan_teknis'=> 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data unit_pelaksanaan_teknis berhasil ditambahkan']);
        return redirect()->route('dataunit_pelaksanaan_teknis.index');
    }

    public function show($id) {
        $unit_pelaksanaan_teknis = Unit_Pelaksanaan_Teknis::where('id_unit_pelaksanaan_teknis', $id)->firstOrFail();
        return view('dataunit_pelaksanaan_teknis/detail', compact('unit_pelaksanaan_teknis'))->render();
    }

    public function create(Request $request)
    {
        \App\Unit_Pelaksanaan_Teknis::create($request->all());
        return redirect('/dataunit_pelaksanaan_teknis')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $unit_pelaksanaan_teknis = \App\Unit_Pelaksanaan_Teknis::find($id);
        return view('dataunit_pelaksanaan_teknis/edit',['dataunit_pelaksanaan_teknis' => $unit_pelaksanaan_teknis]);
    }

    public function update(Request $request,$id)
    {
        $unit_pelaksanaan_teknis = \App\Unit_Pelaksanaan_Teknis::find($id);
        $unit_pelaksanaan_teknis->update($request->all());
        return redirect('/dataunit_pelaksanaan_teknis')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $unit_pelaksanaan_teknis = \App\Unit_Pelaksanaan_Teknis::find($id);
        $unit_pelaksanaan_teknis->delete();
        return redirect()->route('dataunit_pelaksanaan_teknis.index')->with('sukses','Data Berhasil Dihapus');
    }


}
