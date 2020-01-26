<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DateRangeController extends Controller
{
    function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->from_date))
      {
       $data = DB::table('gaji')
         ->whereBetween('date', array($request->from_date, $request->to_date))
         ->get();
      }
      else
      {
       $data = DB::table('gaji')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }
     return view('projectku/daterange');
    }
}

?>