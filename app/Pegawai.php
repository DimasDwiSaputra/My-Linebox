<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Pegawai extends Model
{
    protected $table = "karyawan";
 
    protected $fillable = ['nama','ttl','alamat','email','jk','tlp'];
}