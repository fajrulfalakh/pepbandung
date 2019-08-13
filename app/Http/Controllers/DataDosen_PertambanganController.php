<?php

namespace App\Http\Controllers;

use App\Dosen_Pertambangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class DataDosen_PertambanganController extends Controller
{
    public function index() {
        $dataDosen_Pertambangan = Dosen_Pertambangan::get();
        $nodosen_pertambangan = $this->createNoDosen_Pertambangan();
        return view('datadosen_pertambangan.index', compact('dataDosen_Pertambangan','nodosen_pertambangan'));
    }

    protected function createNoDosen_Pertambangan() {
        $preffix = 'DSN-P-';
        $lastdosen_pertambangan = Dosen_Pertambangan::where(\DB::raw('LEFT(kd_dosen_pertambangan, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_dosen_pertambangan, 4) as no_dosen_pertambangan')->orderBy('no_dosen_pertambangan', 'desc')->first();

        if (!empty($lastdosen_pertambangan)) {
            $now = intval($lastdosen_pertambangan->no_dosen_pertambangan)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'gambar'=> 'required|mimes:jpeg,jpg,png | max:1000',
            'id_dosen_pertambangan' => 'required',
            'kd_dosen_pertambangan' => 'required|unique:dosen_pertambangan,kd_dosen_pertambangan',
            'namadosen_pertambangan' => 'required',
            'tldosen_pertambangan' => 'required',
            'pendidikan_pertambangan'=> 'required'

        ]);

        $do = new Dosen_Pertambangan($request->except('gambar'));
        if ($request->hasFile('gambar')) {
            $do->gambar = $this->saveImage($request->file('gambar'),'dosen_pertambangan');
        }
        $do->save();

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data dosen berhasil ditambahkan']);
        return redirect()->route('datadosen_pertambangan.index');
    }

    public function show($id) {
        $dosen_pertambangan = Dosen_Pertambangan::where('id_dosen_pertambangan', $id)->firstOrFail();
        return view('datadosen_pertambangan/detail', compact('dosen_pertambangan'))->render();
    }

    public function create(Request $request)
    {
        \App\Dosen_Pertambangan::create($request->all());
        return redirect('/datadosen_pertambangan')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $dosen_pertambangan = \App\Dosen_Pertambangan::find($id);
        return view('datadosen_pertambangan/edit',['datadosen_pertambangan' => $dosen_pertambangan]);
    }

    public function update(Request $request,$id)
    {
        $dosen_pertambangan = \App\Dosen_Pertambangan::find($id);
        $data = $request->except('gambar');
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $this->saveImage($request->file('gambar'),'dosen_pertambangan');
            if ($dosen_pertambangan->gambar !== '') {
                $this->deleteImage($dosen_pertambangan->gambar);      
            }
        }



        $dosen_pertambangan->update($data);
        return redirect('/datadosen_pertambangan')->with('sukses','Data Berhasil Diupdate');
    }


    // public function update($id, Request $request) {
    //     $datadosen = Dosen::where('id_dosen', $id)->firstOrFail();

    //     $this->validate($request, [
    //         'gambar'=> 'required | mimes:jpeg,jpg,png | max:1000',
    //         'id_dosen' => 'required',
    //         'kd_dosen' => 'required|unique:dosen,kd_dosen',
    //         'namadosen' => 'required',
    //         'alamatdosen' => 'required',
    //         'jabatan'=> 'required'
    //     ]);
    //     $gambar = $request->file('gambar');
    //     $namaFile = $gambar->getClientOriginalName();
    //     $request->file('gambar')->move('uploadgambar', $namaFile);
    //     $datadosen->update($request->all());
    //     $datadosen->gambar = $namaFile;
    //     $datadosen->save();

    //     \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data Dosen berhasil diupdate']);
    //     return redirect()->route('datadosen.index');
    // }

    public function delete($id)
    {
        $dosen_pertambangan = \App\Dosen_Pertambangan::find($id);
        $dosen_pertambangan->delete();
        return redirect()->route('datadosen_pertambangan.index')->with('sukses','Data Berhasil Dihapus');
    }

    public function saveImage(UploadedFile $photo, $nama)
    {
        $fileName = str_slug($nama) . '-' .date('YmdHis'). '.' . $photo->guessClientExtension();
        $path = storage_path('app/Dosen_Pertambangan/');
        $photo->move($path, $fileName);
        return $fileName;
    }
    public function deleteImage($filename)
    {
        $path = storage_path('app/Dosen_Pertambangan/').$filename;
        return File::delete($path);
    }


}
