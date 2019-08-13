<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_jurusan';
}
