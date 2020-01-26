<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Pegawai;
 
use PDF;
 
class PegawaiController extends Controller
{
    public function index()
    {
    	$pegawai = Pegawai::all();
        return view('projectku/pegawai',['pegawai'=>$pegawai]);
    }
 
    public function cetak_pdf()
    {
    	 $pegawai = Pegawai::all();
 
    $pdf = PDF::loadview('projectku/pegawai_pdf',['pegawai'=>$pegawai]);
    return $pdf->download('laporan-pegawai-pdf');
    }
}