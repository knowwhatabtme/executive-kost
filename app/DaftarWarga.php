<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarWarga extends Model
{
    protected $table = 'warga_gkj';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'email', 'password', 'alamat', 'no_hp', 'wilayah'];
}