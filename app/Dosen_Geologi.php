<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Geologi extends Model
{
    protected $table = 'dosen_geologi';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_dosen_geologi';

}
