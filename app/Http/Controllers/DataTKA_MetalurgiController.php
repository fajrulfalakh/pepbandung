<?php

namespace App\Http\Controllers;

use App\TKA_Metalurgi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class DataTKA_MetalurgiController extends Controller
{
    public function index() {
        $dataTKA_Metalurgi = TKA_Metalurgi::get();
        $notka_metalurgi = $this->createNoTKA_Metalurgi();
        return view('datatka_metalurgi.index', compact('dataTKA_Metalurgi','notka_metalurgi'));
    }

    protected function createNoTKA_Metalurgi() {
        $preffix = 'TKA-M-';
        $lasttka_metalurgi = TKA_Metalurgi::where(\DB::raw('LEFT(kd_tka_metalurgi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_tka_metalurgi, 4) as no_tka_metalurgi')->orderBy('no_tka_metalurgi', 'desc')->first();

        if (!empty($lasttka_metalurgi)) {
            $now = intval($lasttka_metalurgi->no_tka_metalurgi)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_tka_metalurgi' => 'required',
            'kd_tka_metalurgi' => 'required|unique:tka_geologi,kd_tka_geologi',
            'namatka_metalurgi' => 'required',
            'identitastka_metalurgi' => 'required',
            'tltka_metalurgi'=> 'required',
            'pendidikantka_metalurgi'=> 'required'

        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data tka berhasil ditambahkan']);
        return redirect()->route('datatka_metalurgi.index');
    }

    public function show($id) {
        $tka_metalurgi = TKA_Metalurgi::where('id_tka_metalurgi', $id)->firstOrFail();
        return view('datatka_metalurgi/detail', compact('tka_metalurgi'))->render();
    }

    public function create(Request $request)
    {
        \App\TKA_Metalurgi::create($request->all());
        return redirect('/datatka_metalurgi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $tka_metalurgi = \App\TKA_Metalurgi::find($id);
        return view('datatka_metalurgi/edit',['datatka_metalurgi' => $tka_metalurgi]);
    }

    public function update(Request $request,$id)
    {
        $tka_metalurgi = \App\TKA_Metalurgi::find($id);
        $tka_metalurgi->update($request->all());
        return redirect('/datatka_metalurgi')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $tka_metalurgi = \App\TKA_Metalurgi::find($id);
        $tka_metalurgi->delete();
        return redirect()->route('datatka_metalurgi.index')->with('sukses','Data Berhasil Dihapus');
    }

}
