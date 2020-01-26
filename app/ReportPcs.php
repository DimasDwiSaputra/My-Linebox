<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportPcs extends Model
{
    protected $table = "report_pcs";
 
    protected $fillable = ['nama','sabtu','senin','selasa','rabu','kamis','jumat','sabtu','total'];
}
