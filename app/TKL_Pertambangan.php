<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TKL_Pertambangan extends Model
{
    protected $table = 'tkl_pertambangan';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_tkl_pertambangan';

}
