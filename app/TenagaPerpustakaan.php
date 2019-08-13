<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenagaPerpustakaan extends Model
{
    protected $table = 'tenagaperpustakaan';
    protected $guarded = [];
    public $timestamps = false;

    protected $primaryKey = 'id_tenagaperpustakaan';

}
