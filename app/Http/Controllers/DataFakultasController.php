<?php

namespace App\Http\Controllers;

use App\Fakultas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataFakultasController extends Controller
{
    public function index() {
        $dataFakultas = Fakultas::get();
        return view('datafakultas.index', compact('dataFakultas','nofakultas'));
    }

   
    public function store(Request $request) {
        $this->validate($request, [
            'id_fakultas' => 'required|unique: no,id_fakultas',
            'namafakultas' => 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data fakultas berhasil ditambahkan']);
        return redirect()->route('datafakultas.index');
    }

    public function show($id) {
        $fakultas = Fakultas::where('id_fakultas', $id)->firstOrFail();
        return view('datafakultas/detail', compact('fakultas'))->render();
    }

    public function create(Request $request)
    {
        \App\Fakultas::create($request->all()); return redirect('/datafakultas')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $fakultas = \App\Fakultas::find($id);
        return view('datafakultas/edit',['datafakultas' => $fakultas]);
    }

    public function update(Request $request,$id)
    {
        $fakultas = \App\fakultas::find($id);
        $fakultas->update($request->all());
        return redirect('/datafakultas')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $fakultas = \App\Fakultas::find($id);
        $fakultas->delete();
        return redirect()->route('datafakultas.index')->with('sukses','Data Berhasil Dihapus');
    }


}
