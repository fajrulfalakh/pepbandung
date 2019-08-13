<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TKL_Geologi extends Model
{
    protected $table = 'tkl_geologi';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_tkl_geologi';

}
