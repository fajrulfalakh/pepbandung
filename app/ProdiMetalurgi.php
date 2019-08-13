<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdiMetalurgi extends Model
{
    protected $table = 'prodi_metalurgi';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_prodi';
}
