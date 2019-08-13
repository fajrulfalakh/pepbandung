<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data_pendaftaran = \App\Pendaftaran::all();
        return view('Pendaftarans.index',['data_pendaftaran' => $data_pendaftaran]);
    }
    public function create(Request $request)
    {
        \App\Pendaftaran::create($request->all());
        return redirect('/pendaftaran');
    }
    public function edit($id_pendaftaran_mhs)
    {
        $pendaftaran = \App\Pendaftaran::find($id_pendaftaran_mhs);
        return view('/pendaftarans.edit',['pendaftaran' => $pendaftaran]);
    }
    public function update(Request $request,$id_pendaftaran_mhs)
    {
        $pendaftaran = \App\Pendaftaran::find($id_pendaftaran_mhs);
        $pendaftaran->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $pendaftaran->avatar = $request->file('avatar')->getClientOriginalName();
            $pendaftaran->save();
        }
        return redirect('/pendaftaran');
    }
    public function delete($id_pendaftaran_mhs)
    {
        $pendaftaran = \App\Pendaftaran::find($id_pendaftaran_mhs);
        $pendaftaran->delete($pendaftaran);
        return redirect('/pendaftaran')->with('sukses','data berhasil di hapus');
    }
    public function profile($id_pendaftaran_mhs)
    {
        $pendaftaran = \App\Pendaftaran::find($id_pendaftaran_mhs);
        return view('/pendaftarans.profile',['pendaftaran' => $pendaftaran]);
    }

}
