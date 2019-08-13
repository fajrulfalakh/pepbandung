<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_pegawai';

}
