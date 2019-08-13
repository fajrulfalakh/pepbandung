<?php

namespace App\Http\Controllers;

use App\Dosen_Geologi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class DataDosen_GeologiController extends Controller
{
    public function index() {
        $dataDosen_Geologi = Dosen_Geologi::get();
        $nodosen_geologi = $this->createNoDosen_Geologi();
        return view('datadosen_geologi.index', compact('dataDosen_Geologi','nodosen_geologi'));
    }

    protected function createNoDosen_Geologi() {
        $preffix = 'DSN-G-';
        $lastdosen_geologi = Dosen_Geologi::where(\DB::raw('LEFT(kd_dosen_geologi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_dosen_geologi, 4) as no_dosen_geologi')->orderBy('no_dosen_geologi', 'desc')->first();

        if (!empty($lastdosen_geologi)) {
            $now = intval($lastdosen_geologi->no_dosen_geologi)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'gambar'=> 'required|mimes:jpeg,jpg,png | max:1000',
            'id_dosen_geologi' => 'required',
            'kd_dosen_geologi' => 'required|unique:dosen_geologi,kd_dosen_geologi',
            'namadosen_geologi' => 'required',
            'tldosen_geologi' => 'required',
            'pendidikan_geologi'=> 'required'

        ]);

        $do = new Dosen_Geologi($request->except('gambar'));
        if ($request->hasFile('gambar')) {
            $do->gambar = $this->saveImage($request->file('gambar'),'dosen_geologi');
        }
        $do->save();

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data dosen berhasil ditambahkan']);
        return redirect()->route('datadosen_geologi.index');
    }

    public function show($id) {
        $dosen_geologi = Dosen_Geologi::where('id_dosen_geologi', $id)->firstOrFail();
        return view('datadosen_geologi/detail', compact('dosen_geologi'))->render();
    }

    public function create(Request $request)
    {
        \App\Dosen_Geologi::create($request->all());
        return redirect('/datadosen_geologi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $dosen_geologi = \App\Dosen_Geologi::find($id);
        return view('datadosen_geologi/edit',['datadosen_geologi' => $dosen_geologi]);
    }

    public function update(Request $request,$id)
    {
        $dosen_geologi = \App\Dosen_Geologi::find($id);
        $data = $request->except('gambar');
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $this->saveImage($request->file('gambar'),'dosen_geologi');
            if ($dosen_geologi->gambar !== '') {
                $this->deleteImage($dosen_geologi->gambar);      
            }
        }



        $dosen_geologi->update($data);
        return redirect('/datadosen_geologi')->with('sukses','Data Berhasil Diupdate');
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
        $dosen_geologi = \App\Dosen_Geologi::find($id);
        $dosen_geologi->delete();
        return redirect()->route('datadosen_geologi.index')->with('sukses','Data Berhasil Dihapus');
    }

    public function saveImage(UploadedFile $photo, $nama)
    {
        $fileName = str_slug($nama) . '-' .date('YmdHis'). '.' . $photo->guessClientExtension();
        $path = storage_path('app/Dosen_Geologi/');
        $photo->move($path, $fileName);
        return $fileName;
    }
    public function deleteImage($filename)
    {
        $path = storage_path('app/Dosen_Geologi/').$filename;
        return File::delete($path);
    }


}
