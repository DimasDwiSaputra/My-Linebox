<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gaji_chart extends Model
{
      protected $table = 'gaji';
    protected $fillable = ['id_gaji','nama','sabtu','senin','selasa','rabu','kamis','jumat','sabtu','jumlah_barang','cost','date'];
}
