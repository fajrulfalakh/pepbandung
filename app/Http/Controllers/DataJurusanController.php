<?php

namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataJurusanController extends Controller
{
    public function index() {
        $dataJurusan = Jurusan::get();
        return view('datajurusan.index', compact('dataJurusan','nojurusan'));
    }

   
    public function store(Request $request) {
        $this->validate($request, [
            'id_jurusan' => 'required|unique: no,id_jurusan',
            'namajurusan' => 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data jurusan berhasil ditambahkan']);
        return redirect()->route('datajurusan.index');
    }

    public function show($id) {
        $jurusan = Jurusan::where('id_jurusan', $id)->firstOrFail();
        return view('datajurusan/detail', compact('jurusan'))->render();
    }

    public function create(Request $request)
    {
        \App\Jurusan::create($request->all()); return redirect('/datajurusan')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $jurusan = \App\Jurusan::find($id);
        return view('datajurusan/edit',['datajurusan' => $jurusan]);
    }

    public function update(Request $request,$id)
    {
        $jurusan = \App\Jurusan::find($id);
        $jurusan->update($request->all());
        return redirect('/datajurusan')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $jurusan = \App\Jurusan::find($id);
        $jurusan->delete();
        return redirect()->route('datajurusan.index')->with('sukses','Data Berhasil Dihapus');
    }


}
