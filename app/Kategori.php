<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_kategori';

}
