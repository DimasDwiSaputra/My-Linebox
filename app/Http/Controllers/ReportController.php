<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\ReportPcs;
 
use App\Exports\ReportPcsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 
class ReportController extends Controller
{
	public function index()
	{
		$report_pcs = ReportPcs::all();
		return view('report_pcs',['report_pcs'=>$report_pcs]);
	}
 
	public function export_excel()
	{
		return Excel::download(new ReportPcsExport, 'report_pcs.xlsx');
	}
}