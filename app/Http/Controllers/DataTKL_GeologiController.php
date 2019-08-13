<?php

namespace App\Http\Controllers;

use App\TKL_Geologi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class DataTKL_GeologiController extends Controller
{
    public function index() {
        $dataTKL_Geologi = TKL_Geologi::get();
        $notkl_geologi = $this->createNoTKL_Geologi();
        return view('datatkl_geologi.index', compact('dataTKL_Geologi','notkl_geologi'));
    }

    protected function createNoTKL_Geologi() {
        $preffix = 'TKL-G-';
        $lasttkl_geologi = TKL_Geologi::where(\DB::raw('LEFT(kd_tkl_geologi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_tkl_geologi, 4) as no_tkl_geologi')->orderBy('no_tkl_geologi', 'desc')->first();

        if (!empty($lasttkl_geologi)) {
            $now = intval($lasttkl_geologi->no_tkl_geologi)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_tkl_geologi' => 'required',
            'kd_tkl_geologi' => 'required|unique:tkl_geologi,kd_tkl_geologi',
            'namatkl_geologi' => 'required',
            'identitastkl_geologi' => 'required',
            'tltkl_geologi'=> 'required',
            'pendidikantkl_geologi'=> 'required',
            'penugasantkl_geologi'=> 'required'

        ]);
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data tkl berhasil ditambahkan']);
        return redirect()->route('datatkl_geologi.index');
    }

    public function show($id) {
        $tkl_geologi = TKL_Geologi::where('id_tkl_geologi', $id)->firstOrFail();
        return view('datatkl_geologi/detail', compact('tkl_geologi'))->render();
    }

    public function create(Request $request)
    {
        \App\TKL_Geologi::create($request->all());
        return redirect('/datatkl_geologi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $tkl_geologi = \App\TKL_Geologi::find($id);
        return view('datatkl_geologi/edit',['datatkl_geologi' => $tkl_geologi]);
    }

    public function update(Request $request,$id)
    {
        $tkl_geologi = \App\TKL_Geologi::find($id);
        $tkl_geologi->update($request->all());
        return redirect('/datatkl_geologi')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $tkl_geologi = \App\TKL_Geologi::find($id);
        $tkl_geologi->delete();
        return redirect()->route('datatkl_geologi.index')->with('sukses','Data Berhasil Dihapus');
    }
}
