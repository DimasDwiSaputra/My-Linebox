<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function table(){
    $pegawai = DB::table('karyawan')->get ();
    	// $pegawai = [
    	// 	[
    	// 		'nama' => 'Bagyo',
    	// 		'ttl' => '05 Juli 1999', 
    	// 		'alamat' => 'Desa Kecila RT 01/06 Kecamatan Kemranjen Kabupaten Banyumas',
     //            'email' => 'Bagyo@gmail.com',
     //            'jk' => 'Pria',
     //            'tlp' => '087264997222'
    	// 	],
    	// 	[
    	// 		'nama' => 'Wiwi',
     //            'ttl' => '05 Agustus 2000', 
     //            'alamat' => 'Desa Kecila RT 01/06 Kecamatan Kemranjen Kabupaten Banyumas',
     //            'email' => 'Wiwi@gmail.com',
     //            'jk' => 'Wanita',
     //            'tlp' => '08733397222'
    	// 	]
    	// ];
    	return view('projectku.table', compact('pegawai'));
    }
    //public function add(){
    	//return view('pegawai.add');
    //}
}
