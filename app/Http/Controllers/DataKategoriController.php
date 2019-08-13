<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataKategoriController extends Controller
{
    public function index() {
        $dataKategori = Kategori::get();
        $nokategori = $this->createNoKategori();
        return view('datakategori.index', compact('dataKategori','nokategori'));
    }

    protected function createNoKategori() {
        $preffix = 'KT-';
        $lastkategori = Kategori::where(\DB::raw('LEFT(kd_kategori, '.strlen($preffix).')'), $preffix)->selectRaw('RIGHT(kd_kategori, 4) as no_kategori')->orderBy('no_kategori', 'desc')->first();

        if (!empty($lastkategori)) {
            $now = intval($lastkategori->no_kategori)+1;
            $no = str_pad($now, 4, '0', STR_PAD_LEFT);
        } else {
            $no = '0001';
        }

        return $preffix.$no;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'kd_kategori' => 'required|unique:kategori,kd_kategori',
            'nama_kategori' => 'required',
            'deskripsi' => 'required',
            'gambar'=> 'required|image'
        ]);
        $gambar = $request->file('gambar');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('gambar')->move('uploadgambar', $namaFile);
        $do = new Kategori($request->all());
        $do->gambar = $namaFile;
        $do->save();

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data Kategori berhasil ditambahkan']);
        return redirect()->route('datakategori.index');
    }

    public function show($id) {
        $kategori = Kategori::where('id_kategori', $id)->firstOrFail();
        return view('datakategori._detail', compact('kategori'))->render();
    }

    public function edit($id) {
        $kategori = Kategori::where('id_kategori', $id)->firstOrFail();
        return view('datakategori._edit', compact('kategori'))->render();
    }

    public function update($id, Request $request) {
        $kategori = Kategori::where('id_kategori', $id)->firstOrFail();

        $this->validate($request, [
            'nama_kategori' => 'required',
            'deskripsi' => 'required',
            'gambar'=> 'required'
        ]);
        $gambar = $request->file('gambar');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('gambar')->move('uploadgambar', $namaFile);
        $kategori->update($request->all());
        $kategori->gambar = $namaFile;
        $kategori->save();
        
        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data Kategori berhasil diupdate']);
        return redirect()->route('datakategori.index');
    }

    public function destroy($id) {
        $kategori = Kategori::where('id_kategori', $id)->firstOrFail();
        $kategori->delete();

        \Session::flash('notification', ['level' => 'success', 'title' => 'Success', 'message' => 'Data Kategori berhasil dihapus']);
        return redirect()->route('datakategori.index');
    }
}
