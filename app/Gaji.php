<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
 protected $table = "gaji";
 
    protected $fillable = ['nama','sabtu','senin','selasa','rabu','kamis','jumat','sabtu'];
}
