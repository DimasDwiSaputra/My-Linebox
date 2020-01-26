<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\ReportPcs;
 
use Session;
 
use App\Exports\SiswaExport;
use App\Imports\LaporanImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 
class LaporanController extends Controller
{
	public function index()
	{
		$laporan = ReportPcs::all();
		return view('projectku/reportPcs',['laporan'=>$laporan]);
	}
 
	public function export_excel()
	{
		return Excel::download(new SiswaExport, 'siswa.xlsx');
	}
 
	public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_laporan',$nama_file);
 
		// import data
		Excel::import(new LaporanImport, public_path('/file_laporan/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Laporan Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/projectku/reportPcs');
	}
}