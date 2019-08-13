<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praktikum extends Model
{
    protected $table = 'praktikum';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_praktikum';

}
