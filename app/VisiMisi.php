<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    protected $table = 'visimisi';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_visimisi';

}
