<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah_Pertambangan extends Model
{
    protected $table = 'matakuliah_pertambangan';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_matakuliah_pertambangan';

}
