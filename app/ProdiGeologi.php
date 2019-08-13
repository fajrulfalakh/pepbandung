<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdiGeologi extends Model
{
    protected $table = 'prodi_geologi';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_prodi';
}
