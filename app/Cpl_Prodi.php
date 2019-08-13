<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpl_Prodi extends Model
{
    protected $table = 'cpl_prodi';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_cpl_prodi';

}
