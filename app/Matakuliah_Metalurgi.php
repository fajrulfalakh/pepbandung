<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah_Metalurgi extends Model
{
    protected $table = 'matakuliah_metalurgi';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_matakuliah_metalurgi';

}
