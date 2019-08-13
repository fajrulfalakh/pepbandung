<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    protected $table = 'mengajar';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_mengajar';

}
