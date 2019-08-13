<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Metalurgi extends Model
{
    protected $table = 'dosen_metalurgi';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_dosen_metalurgi';

}
