<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'fakultas';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_fakultas';
}
