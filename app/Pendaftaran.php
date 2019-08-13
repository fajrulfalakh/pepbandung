<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'tb_pendaftaran_mhs';

    public $timestamps = false;
    protected $fillable = ['tanggal_pendaftaran', 'email_mhs', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'gender', 'agama', 'no_induk_kependudukan', 'kewarganegaraan', 'jenis_tinggal', 'alat_transportasi', 'nomor_telepon', 'nomor_hp', 'kps', 'nomor_kps', 'id_program_studi', 'id_kelompok_mhs', 'no_registrasi', 'hasil_tes', 'foto_mhs', 'ijazah_skhun', 'ktp_kk', 'surat_keterangan_sehat', 'surat_industri'];
    protected $primaryKey = 'id_pendaftaran_mhs';
}
