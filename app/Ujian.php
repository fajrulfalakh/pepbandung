<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $table = 'ujian';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_ujian';

}
