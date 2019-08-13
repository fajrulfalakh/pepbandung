<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdiPertambangan extends Model
{
    protected $table = 'prodi_pertambangan';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_prodi';
}
