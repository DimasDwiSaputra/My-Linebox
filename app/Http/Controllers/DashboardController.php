<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard() {
   		return view('pages/admin/dashboard/dashboard');
    }
    public function totaltbl() {
      $data_karyawan = \App\karyawanku::all();
   		$count_karyawan = \App\karyawanku::count();
   		$count_male = DB::table('karyawan')
                ->where('jk', '=', 'Laki-Laki')
                ->count();
      $count_female = DB::table('karyawan')
                ->where('jk', '=', 'Perempuan')
                ->count();  
      $count_aktif = DB::table('karyawan')
                ->where('status', '=', 'Aktif')
                ->count();      
      $count_cuti = DB::table('karyawan')
                ->where('status', '=', 'Cuti')
                ->count(); 
      $count_resign = DB::table('karyawan')
                ->where('status', '=', 'Resign')
                ->count();                         
/*   		$count_kar = \App\Karyawan::count();
   		$count_user = \App\User::count();*/
		return view('projectku/index',['count_karyawan' => $count_karyawan,'count_male' => $count_male,'count_female' => $count_female,'count_aktif' => $count_aktif,'count_cuti' => $count_cuti,'count_resign' => $count_resign]);  //->with('count', $count);
    }

}
