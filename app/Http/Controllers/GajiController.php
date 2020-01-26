<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GajiController extends Controller
{
 public function table(){
    $gaji = DB::table('gaji')->get ();
    $jumlah = DB::table('gaji')->sum('cost');
    return view('projectku.tableGaji', compact('gaji','jumlah'));
    }  //

public function add(){
	return view('projectku.formGaji');
}

public function store(request $request){
	//validation
	$cost = DB::table('gaji')->get();

	$sabtu=0;
	$senin=0;
	$selasa=0;
	$rabu=0;
	$kamis=0;
	$jumat=0;
	$total_cost=0;
	$jumlah_barang=0;
	$total=0;
	$validateData = $request -> validate ([
		'nama' =>'required|unique:gaji,nama',
		'date' => 'required',
		'sabtu' => 'required',
		'senin' => 'required',
		'selasa' => 'required',
		'rabu' => 'required',
		'kamis' => 'required',
		'jumat' => 'required',



	]);
	
	
		
	if ($request->sabtu>=0){
		foreach ($cost as $data) {
			$sabtu = $request->sabtu;
		}
	}
	if ($request->senin>=0){
		foreach ($cost as $data) {
			$senin = $request->senin;
		}
	}
	if ($request->selasa>=0){
		foreach ($cost as $data) {
			$selasa = $request->selasa;
		}
	}
	if ($request->rabu>=0){
		foreach ($cost as $data) {
			$rabu = $request->rabu;
		}
	}
	if ($request->kamis>=0){
		foreach ($cost as $data) {
			$kamis = $request->kamis;
		}
	}
	if ($request->jumat>=0){
		foreach ($cost as $data) {
			$jumat = $request->jumat;
		}
	}
	$jumlah_barang = $sabtu+$senin+$selasa+$rabu+$kamis+$jumat;
	$total_cost = $jumlah_barang*44;
	// insert data ke table karyawan
	DB::table('gaji')-> insert ([
		'nama' => $request->nama,
		'date' => $request->date,
		'sabtu' => $request->sabtu,
		'senin' => $request->senin,
		'selasa' => $request->selasa,
		'rabu' => $request->rabu,
		'kamis' => $request->kamis,
		'jumat' => $request->jumat,
		'jumlah_barang' => $jumlah_barang,
		'cost' => $total_cost

	]);
	return redirect ('/projectku/tableGaji');
	}

public function editGaji ($id){
$gaji = DB::table ('gaji')->where('id_gaji',$id)->get();
	return view('projectku.editGaji',['gaji'=>$gaji]);
} 	
public function updateGaji (Request $request){
	$cost = DB::table('gaji')->get();

	$sabtu=0;
	$senin=0;
	$selasa=0;
	$rabu=0;
	$kamis=0;
	$jumat=0;
	$total_cost=0;
	$jumlah_barang=0;
	$total=0;
	if ($request->sabtu>=0){
		foreach ($cost as $data) {
			$sabtu = $request->sabtu;
		}
	}
	if ($request->senin>=0){
		foreach ($cost as $data) {
			$senin = $request->senin;
		}
	}
	if ($request->selasa>=0){
		foreach ($cost as $data) {
			$selasa = $request->selasa;
		}
	}
	if ($request->rabu>=0){
		foreach ($cost as $data) {
			$rabu = $request->rabu;
		}
	}
	if ($request->kamis>=0){
		foreach ($cost as $data) {
			$kamis = $request->kamis;
		}
	}
	if ($request->jumat>=0){
		foreach ($cost as $data) {
			$jumat = $request->jumat;
		}
	}
	$jumlah_barang = $sabtu+$senin+$selasa+$rabu+$kamis+$jumat;
	$total_cost = $jumlah_barang*44;
	DB::table('gaji')->where('id_gaji',$request->id)->update([
		

		'nama' => $request->nama,
		'date' => $request->date,
		'sabtu' => $request->sabtu,
		'senin' => $request->senin,
		'selasa' => $request->selasa,
		'rabu' => $request->rabu,
		'kamis' => $request->kamis,
		'jumat' => $request->jumat,
		'jumlah_barang' => $request->jumlah_barang,
		'cost' => $total_cost
	
	]);
	return redirect('/projectku/tableGaji');
	}
public function hapus($id)
{
	DB::table('gaji')->where('id_gaji',$id)-> delete();
	return redirect('/projectku/tableGaji');
}
}
