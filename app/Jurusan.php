<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'id_jurusan';
    protected $fillable = ['nm_jurusan'];
 	public $timestamps = false;

 	public function kandidat()
 	{
 		return $this->hasMany('App\Kandidat');
 	}

}
