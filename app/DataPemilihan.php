<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPemilihan extends Model
{
    protected $table = 'data_pemilihan';
    protected $primaryKey = 'id_data_pemilihan';
    protected $fillable = ['id_pemilih', 'id_kandidat', 'tanggal', 'tahun_ajaran'];
    public $timestamps = false;
}
