<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
use App\Gaji;
 
use PDF;
 
class GajiPDFController extends Controller
{
    public function index()
    {
    	$gaji = Gaji::all();
        return view('projectku/gajiPDF',['gaji'=>$gaji]);

    }
 
    public function cetak_pdf()
    {
    	 $gaji = Gaji::all();
        $jumlah = DB::table('gaji')->sum('cost');
 
    $pdf = PDF::loadview('projectku/gaji_pdf',['gaji'=>$gaji],['jumlah'=>$jumlah]);
    return $pdf->download('laporan-gaji-pdf');
    }
}