<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil_Lulusan extends Model
{
    protected $table = 'profil_lulusan';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_profil_lulusan';

}
