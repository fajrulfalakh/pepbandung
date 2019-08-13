<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_prodi';

}
