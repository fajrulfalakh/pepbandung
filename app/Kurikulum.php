<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    protected $table = 'kurikulum';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_mahasiswa';

}
