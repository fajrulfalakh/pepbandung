<?php

namespace App\Http\Controllers;

use App\Dosen_Metalurgi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class DataDosen_MetalurgiController extends Controller
{
    public function index() {
        $dataDosen_Metalurgi = Dosen_Metalurgi::get();
        $nodosen_metalurgi = $this->createNoDosen_Metalurgi();
        return view('datadosen_metalurgi.index', compact('dataDosen_Metalurgi','nodosen_metalurgi'));
    }

    protected function createNoDosen_Metalurgi() {
        $preffix = 'DSN-M-';
        $lastdosen_metalurgi = Dosen_Metalurgi::where(\DB::raw('LEFT(kd_dosen_metalurgi, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_dosen_metalurgi, 4) as no_dosen_metalurgi')->orderBy('no_dosen_metalurgi', 'desc')->first();

        if (!empty($lastdosen_metalurgi)) {
            $now = intval($lastdosen_metalurgi->no_dosen_metalurgi)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'gambar'=> 'required|mimes:jpeg,jpg,png | max:1000',
            'id_dosen_metalurgi' => 'required',
            'kd_dosen_metalurgi' => 'required|unique:dosen_metalurgi,kd_dosen_metalurgi',
            'namadosen_metalurgi' => 'required',
            'tldosen_metalurgi' => 'required',
            'pendidikan_metalurgi'=> 'required'

        ]);

        $do = new Dosen_Metalurgi($request->except('gambar'));
        if ($request->hasFile('gambar')) {
            $do->gambar = $this->saveImage($request->file('gambar'),'dosen_metalurgi');
        }
        $do->save();

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data dosen berhasil ditambahkan']);
        return redirect()->route('datadosen_metalurgi.index');
    }

    public function show($id) {
        $dosen_metalurgi = Dosen_Metalurgi::where('id_dosen_metalurgi', $id)->firstOrFail();
        return view('datadosen_metalurgi/detail', compact('dosen_metalurgi'))->render();
    }

    public function create(Request $request)
    {
        \App\Dosen_Metalurgi::create($request->all());
        return redirect('/datadosen_metalurgi')->with('sukses','Tambah Data Sukses');
    }
    public function edit($id)
    {
        $dosen_metalurgi = \App\Dosen_Metalurgi::find($id);
        return view('datadosen_metalurgi/edit',['datadosen_metalurgi' => $dosen_metalurgi]);
    }

    public function update(Request $request,$id)
    {
        $dosen_metalurgi = \App\Dosen_Metalurgi::find($id);
        $data = $request->except('gambar');
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $this->saveImage($request->file('gambar'),'dosen_metalurgi');
            if ($dosen_metalurgi->gambar !== '') {
                $this->deleteImage($dosen_metalurgi->gambar);      
            }
        }



        $dosen_metalurgi->update($data);
        return redirect('/datadosen_metalurgi')->with('sukses','Data Berhasil Diupdate');
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
        $dosen_metalurgi = \App\Dosen_Metalurgi::find($id);
        $dosen_metalurgi->delete();
        return redirect()->route('datadosen_metalurgi.index')->with('sukses','Data Berhasil Dihapus');
    }

    public function saveImage(UploadedFile $photo, $nama)
    {
        $fileName = str_slug($nama) . '-' .date('YmdHis'). '.' . $photo->guessClientExtension();
        $path = storage_path('app/Dosen_Metalurgi/');
        $photo->move($path, $fileName);
        return $fileName;
    }
    public function deleteImage($filename)
    {
        $path = storage_path('app/Dosen_Metalurgi/').$filename;
        return File::delete($path);
    }


}
