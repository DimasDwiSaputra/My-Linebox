<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
 public function table(){
    $pegawai = DB::table('karyawan')->get ();
    return view('projectku.table', compact('pegawai'));
    }  //

public function add(){
	return view('projectku.form');
}

public function store(request $request){
	//validation
	$validateData = $request -> validate ([
		'nama' => 'required',
		'ttl' => 'required',
		'alamat' => 'required',
		'jk' => 'required',
		'tlp' => 'required',
		'status' => 'required',

	]);
	// insert data ke table karyawan
	DB::table('karyawan')-> insert ([
		'nama' => $request->nama,
		'ttl' => $request->ttl,
		'alamat' => $request->alamat,
		'jk' => $request->jk,
		'tlp' => $request->tlp,
		'status' => $request->status

	]);
	return redirect ('/projectku/table');
	}
public function edit ($id){
	$pegawai = DB::table ('karyawan')->where('id_pegawai',$id)->get();
	return view('projectku.edit',['pegawai'=>$pegawai]);
} 	
public function update (Request $request){
	DB::table('karyawan')->where('id_pegawai',$request->id)->update([
		'nama' => $request->nama,
		'ttl' => $request->ttl,
		'alamat' => $request->alamat,
		'jk' => $request->jk,
		'tlp' => $request->tlp,
		'status' => $request->status
	]);
	return redirect('/projectku/table');
	}
public function hapus($id)
{
	DB::table('karyawan')->where('id_pegawai',$id)-> delete();
	return redirect('/projectku/table');
}
}
