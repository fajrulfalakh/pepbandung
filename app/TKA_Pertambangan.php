<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TKA_Pertambangan extends Model
{
    protected $table = 'tka_pertambangan';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_tka_pertambangan';

}
