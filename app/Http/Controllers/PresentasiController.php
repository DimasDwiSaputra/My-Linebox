<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresentasiController extends Controller
{
    public function dashboard() {
   		return view('pages/admin/dashboard/dashboard');
    }
    public function dataPresentasi() {
      $data_presentasi = \App\gaji_chart::all();
   		$count_data = \App\gaji_chart::count();
   		
		return view('projectku/chart',['count_data' => $count_data/*'count_male' => $count_male,'count_female' => $count_female,'count_aktif' => $count_aktif,'count_cuti' => $count_cuti,'count_resign' => $count_resign*/]);  //->with('count', $count);
    }

}
