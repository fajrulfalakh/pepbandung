<?php

namespace App\Http\Controllers;

use App\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataVisiMisiController extends Controller
{
    public function index() {
        $dataVisiMisi = VisiMisi::get();
        $novisimisi = $this->createNoVisiMisi();
        return view('datavisimisi.index', compact('dataVisiMisi','novisimisi'));
    }

    protected function createNoVisiMisi() {
        $preffix = 'VM-';
        $lastvisimisi = VisiMisi::where(\DB::raw('LEFT(id_visimisi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(id_visimisi, 4) as no_visimisi')->orderBy('no_visimisi', 'desc')->first();

        if (!empty($lastvisimisi)) {
            $now = intval($lastvisimisi->no_visimisi)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }
    public function store(Request $request) {
        $this->validate($request, [
            'id_visimisi' => 'required',
            'namavisi' => 'required',
            'namamisi' => 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data visimisi berhasil ditambahkan']);
        return redirect()->route('datavisimisi.index');
    }

    public function show($id) {
        $visimisi = VisiMisi::where('id_visimisi', $id)->firstOrFail();
        return view('datavisimisi/detail', compact('visimisi'))->render();
    }

    public function create(Request $request)
    {
        \App\VisiMisi::create($request->all());
        return redirect('/datavisimisi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $visimisi = \App\VisiMisi::find($id);
        return view('datavisimisi/edit',['datavisimisi' => $visimisi]);
    }

    public function update(Request $request,$id)
    {
        $visimisi = \App\VisiMisi::find($id);
        $visimisi->update($request->all());
        return redirect('/datavisimisi')->with('sukses','Data Berhasil Diupdate');
    }
    
    public function delete($id)
    {
        $visimisi = \App\VisiMisi::find($id);
        $visimisi->delete();
        return redirect()->route('datavisimisi.index')->with('sukses','Data Berhasil Dihapus');
    }


}
