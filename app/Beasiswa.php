<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $table = 'beasiswa';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_beasiswa';

}
