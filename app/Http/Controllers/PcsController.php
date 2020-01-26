<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PcsController extends Controller
{
 public function table(){
    $report_pcs = DB::table('report_pcs')->get ();
    return view('projectku.reportPcs', compact('report_pcs'));
    }  //

public function add(){
	return view('projectku.formPcs');
}

public function store(request $request){
	//validation
	$validateData = $request -> validate ([
		'nama' => 'required',
		'sabtu' => 'required',
		'senin' => 'required',
		'selasa' => 'required',
		'rabu' => 'required',
		'kamis' => 'required',
		'jumat' => 'required',
		'total' => 'required',


	]);
	// insert data ke table karyawan
	DB::table('report_pcs')-> insert ([
		'nama' => $request->nama,
		'sabtu' => $request->sabtu,
		'senin' => $request->senin,
		'selasa' => $request->selasa,
		'rabu' => $request->rabu,
		'kamis' => $request->kamis,
		'jumat' => $request->jumat,
		'total' => $request->total

	]);
	return redirect ('/projectku/reportPcs');
	}
public function editPcs ($id){
	$report_pcs= DB::table ('report_pcs')->where('id',$id)->get();
	return view('projectku.editPcs',['report_pcs'=>$report_pcs]);
} 	
public function updatePcs (Request $request){
	DB::table('report_pcs')->where('id',$request->id)->update([
		'nama' => $request->nama,
		'sabtu' => $request->sabtu,
		'senin' => $request->senin,
		'selasa' => $request->selasa,
		'rabu' => $request->rabu,
		'kamis' => $request->kamis,
		'jumat' => $request->jumat,
		'total' => $request->total
	]);
	return redirect('/projectku/reportPcs');
	}
public function hapus($id)
{
	DB::table('report_pcs')->where('id',$id)-> delete();
	return redirect('/projectku/reportPcs');
}
}
