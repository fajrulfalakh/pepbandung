<?php

namespace App\Http\Controllers;

use App\Matakuliah_Metalurgi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataMatakuliah_MetalurgiController extends Controller
{
    public function index() {
        $dataMatakuliah_Metalurgi = Matakuliah_Metalurgi::get();
        $nomatakuliah_metalurgi = $this->createNoMatakuliah_Metalurgi();
        return view('datamatakuliah_metalurgi.index', compact('dataMatakuliah_Metalurgi','nomatakuliah_metalurgi'));
    }

    protected function createNoMatakuliah_Metalurgi() {
        $preffix = 'MM-';
        $lastmatakuliah_metalurgi = Matakuliah_Metalurgi::where(\DB::raw('LEFT(kd_matakuliah_metalurgi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_matakuliah_metalurgi, 4) as no_matakuliah_metalurgi')->orderBy('no_matakuliah_metalurgi', 'desc')->first();

        if (!empty($lastmatakuliah_metalurgi)) {
            $now = intval($lastmatakuliah_metalurgi->no_matakuliah_metalurgi)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_matakuliah_metalurgi' => 'required',
            'kd_matakuliah_metalurgi' => 'required',
            'namamatakuliah_metalurgi' => 'required',
            'semester' => 'required',
            'teori'=> 'required',
            'praktek' => 'required',
            'kerjalapang' => 'required'
        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data matakuliah_metalurgi berhasil ditambahkan']);
        return redirect()->route('datamatakuliah_metalurgi.index');
    }

    public function show($id) {
        $matakuliah_metalurgi = Matakuliah_Metalurgi::where('id_matakuliah_metalurgi', $id)->firstOrFail();
        return view('datamatakuliah_metalurgi/detail', compact('matakuliah_metalurgi'))->render();
    }

    public function create(Request $request)
    {
        \App\Matakuliah_Metalurgi::create($request->all());
        return redirect('/datamatakuliah_metalurgi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $matakuliah_metalurgi = \App\Matakuliah_Metalurgi::find($id);
        return view('datamatakuliah_metalurgi/edit',['datamatakuliah_metalurgi' => $matakuliah_metalurgi]);
    }

    public function update(Request $request,$id)
    {
        $matakuliah_metalurgi = \App\Matakuliah_Metalurgi::find($id);
        $matakuliah_metalurgi->update($request->all());
        return redirect('/datamatakuliah_metalurgi')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $matakuliah_metalurgi = \App\Matakuliah_Metalurgi::find($id);
        $matakuliah_metalurgi->delete();
        return redirect()->route('datamatakuliah_metalurgi.index')->with('sukses','Data Berhasil Dihapus');
    }


}
