<?php

namespace App\Http\Controllers;

use App\TKL_Pertambangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class DataTKL_PertambanganController extends Controller
{
    public function index() {
        $dataTKL_Pertambangan = TKL_Pertambangan::get();
        $notkl_pertambangan = $this->createNoTKL_Pertambangan();
        return view('datatkl_pertambangan.index', compact('dataTKL_Pertambangan','notkl_pertambangan'));
    }

    protected function createNoTKL_Pertambangan() {
        $preffix = 'TKL-P-';
        $lasttkl_pertambangan = TKL_Pertambangan::where(\DB::raw('LEFT(kd_tkl_pertambangan, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_tkl_pertambangan, 4) as no_tkl_pertambangan')->orderBy('no_tkl_pertambangan', 'desc')->first();

        if (!empty($lasttkl_pertambangan)) {
            $now = intval($lasttkl_pertambangan->no_tkl_pertambangan)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_tkl_pertambangan' => 'required',
            'kd_tkl_pertambangan' => 'required|unique:tkl_pertambangan,kd_tkl_pertambangan',
            'namatkl_pertambangan' => 'required',
            'identitastkl_pertambangan' => 'required',
            'tltkl_pertambangan'=> 'required',
            'pendidikantkl_pertambangan'=> 'required',
            'penugasantkl_pertambangan'=> 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data tkl berhasil ditambahkan']);
        return redirect()->route('datatkl_pertambangan.index');
    }

    public function show($id) {
        $tkl_pertambangan = TKL_Pertambangan::where('id_tkl_pertambangan', $id)->firstOrFail();
        return view('datatkl_pertambangan/detail', compact('tkl_pertambangan'))->render();
    }

    public function create(Request $request)
    {
        \App\TKL_Pertambangan::create($request->all());
        return redirect('/datatkl_pertambangan')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $tkl_pertambangan = \App\TKL_Pertambangan::find($id);
        return view('datatkl_pertambangan/edit',['datatkl_pertambangan' => $tkl_pertambangan]);
    }

    public function update(Request $request,$id)
    {
        $tkl_pertambangan = \App\TKL_Pertambangan::find($id);
        $tkl_pertambangan->update($request->all());
        return redirect('/datatkl_pertambangan')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $tkl_pertambangan = \App\TKL_Pertambangan::find($id);
        $tkl_pertambangan->delete();
        return redirect()->route('datatkl_pertambangan.index')->with('sukses','Data Berhasil Dihapus');
    }
}
