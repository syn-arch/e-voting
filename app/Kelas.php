<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
   protected $table = 'kelas';
   protected $primaryKey = 'id_kelas';
   protected $fillable = ['nm_kelas'];
   public $timestamps = false;

   public function kandidat()
   {
   		return $this->hasMany('App\Kandidat');
   }

   public function pemilih()
   {
   		return $this->hasMany('App\Pemilih');
   }

}

