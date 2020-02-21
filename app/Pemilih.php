<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    protected $table = 'pemilih';
    protected $primaryKey = 'id_pemilih';
    protected $fillable = ['nm_pemilih','status','sudah_print'];
   	public $timestamps = false;
}
