<?php

namespace App\Http\Controllers;

use App\TKL_Metalurgi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class DataTKL_MetalurgiController extends Controller
{
    public function index() {
        $dataTKL_Metalurgi = TKL_Metalurgi::get();
        $notkl_metalurgi = $this->createNoTKL_Metalurgi();
        return view('datatkl_metalurgi.index', compact('dataTKL_Metalurgi','notkl_metalurgi'));
    }

    protected function createNoTKL_Metalurgi() {
        $preffix = 'TKL-M-';
        $lasttkl_metalurgi = TKL_Metalurgi::where(\DB::raw('LEFT(kd_tkl_metalurgi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_tkl_metalurgi, 4) as no_tkl_metalurgi')->orderBy('no_tkl_metalurgi', 'desc')->first();

        if (!empty($lasttkl_metalurgi)) {
            $now = intval($lasttkl_metalurgi->no_tkl_metalurgi)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'id_tkl_metalurgi' => 'required',
            'kd_tkl_metalurgi' => 'required|unique:tkl_geologi,kd_tkl_geologi',
            'namatkl_metalurgi' => 'required',
            'identitastkl_metalurgi' => 'required',
            'tltkl_metalurgi'=> 'required',
            'pendidikantkl_metalurgi'=> 'required',
            'penugasantkl_metalurgi'=> 'required'

        ]);

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data tkl berhasil ditambahkan']);
        return redirect()->route('datatkl_metalurgi.index');
    }

    public function show($id) {
        $tkl_metalurgi = TKL_Metalurgi::where('id_tkl_metalurgi', $id)->firstOrFail();
        return view('datatkl_metalurgi/detail', compact('tkl_metalurgi'))->render();
    }

    public function create(Request $request)
    {
        \App\TKL_Metalurgi::create($request->all());
        return redirect('/datatkl_metalurgi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $tkl_metalurgi = \App\TKL_Metalurgi::find($id);
        return view('datatkl_metalurgi/edit',['datatkl_metalurgi' => $tkl_metalurgi]);
    }

    public function update(Request $request,$id)
    {
        $tkl_metalurgi = \App\TKL_Metalurgi::find($id);
        $tkl_metalurgi->update($request->all());
        return redirect('/datatkl_metalurgi')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $tkl_metalurgi = \App\TKL_Metalurgi::find($id);
        $tkl_metalurgi->delete();
        return redirect()->route('datatkl_metalurgi.index')->with('sukses','Data Berhasil Dihapus');
    }

}
