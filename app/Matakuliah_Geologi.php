<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah_Geologi extends Model
{
    protected $table = 'matakuliah_geologi';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_matakuliah_geologi';

}
