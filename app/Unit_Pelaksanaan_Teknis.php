<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit_Pelaksanaan_Teknis extends Model
{
    protected $table = 'unit_pelaksanaan_teknis';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_unit_pelaksanaan_teknis';

}
