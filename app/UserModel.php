<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'admin';
    protected $fillable = ['nm_admin','jk','alamat','telepon','email','password','gambar'];
    protected $primaryKey = 'id_admin';
    public $timestamps = false;
}
