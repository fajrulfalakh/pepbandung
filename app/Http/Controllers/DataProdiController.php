<?php

namespace App\Http\Controllers;

use App\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataProdiController extends Controller
{
    public function index() {
        $dataProdi = Prodi::get();
        return view('dataprodi.index', compact('dataProdi','noprodi'));
    }

   
    public function store(Request $request) {
        $this->validate($request, [
            'id_prodi' => 'required|unique: no,id_prodi',
            'namaprodi' => 'required',
            'materi' => 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data prodi berhasil ditambahkan']);
        return redirect()->route('dataprodi.index');
    }

    public function show($id) {
        $prodi = Prodi::where('id_prodi', $id)->firstOrFail();
        return view('dataprodi/detail', compact('prodi'))->render();
    }

    public function create(Request $request)
    {
        \App\Prodi::create($request->all());
        return redirect('/dataprodi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $prodi = \App\Prodi::find($id);
        return view('dataprodi/edit',['dataprodi' => $prodi]);
    }

    public function update(Request $request,$id)
    {
        $prodi = \App\Prodi::find($id);
        $prodi->update($request->all());
        return redirect('/dataprodi')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $prodi = \App\Prodi::find($id);
        $prodi->delete();
        return redirect()->route('dataprodi.index')->with('sukses','Data Berhasil Dihapus');
    }


}
