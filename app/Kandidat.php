<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kandidat extends Model
{
    protected $table = 'kandidat';
    protected $primaryKey = 'id_kandidat';
    public $timestamps = false;
    protected $fillable = ['nm_kandidat','id_kelas','id_jurusan','jk','alamat','email','telepon','visi','misi','jml_suara','gambar','tahun_ajaran','no_urut'];

    public function kelas()
    {
    	return $this->belongsTo('App\Kelas','id_kelas');
    }
    
    public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan','id_jurusan');
    }
}
