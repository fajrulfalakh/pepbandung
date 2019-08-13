<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TKA_Geologi extends Model
{
    protected $table = 'tka_geologi';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_tka_geologi';

}
