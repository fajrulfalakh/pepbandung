<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Pertambangan extends Model
{
    protected $table = 'dosen_pertambangan';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_dosen_pertambangan';

}
