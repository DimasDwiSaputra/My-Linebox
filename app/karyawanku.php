<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawanku extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['id_pegawai','nama','ttl','alamat','email','jk','tlp'];
}
