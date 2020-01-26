<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

//Auth::routes();
Route::group(['middleware' => ['auth']], function() {
	Route::get('projectku/index', 'IndexController@index');
});

//Dashboar
Route:: get('projectku/index', 'DashboardController@totaltbl');
Route:: get('projectku/chart', 'PresentasiController@dataPresentasi');
//Login

Route::get('/karlogout','AuthController@karlogout');
//Route::post('/login', 'AuthController@login')->middleware('cekstatus');

Route::get('projectku/login', 'AuthController@login')->name('login');
Route::post('projectku/login', 'AuthController@postkarlog');
Route::get('projectku/registerku','AuthController@getRegister');
Route::post('projectku/registerku','AuthController@postRegister')->name('registerku');

//selesai Login
Route::get('projectku/table', 'FormController@table')->name('table');
Route::get('projectku/form', 'FormController@add')->name('add');
Route::get('projectku/edit/{id}','FormController@edit');
Route::post('projectku/update','FormController@update');
Route::get('projectku/hapus/{id}','FormController@hapus');
//Route::post('projectku', 'TableController@table');
Route::post('projectku', 'FormController@store');
//Route::get('projectku/table', 'TableController@table');




//Gaji
Route::get('projectku/tableGaji', 'GajiController@table')->name('tableGaji');
Route::get('projectku/formGaji', 'GajiController@add')->name('addGaji');



Route::get('projectku/editGaji/{id}','GajiController@editGaji');

Route::post('projectku/updateGaji','GajiController@updateGaji');



Route::get('projectku/hapusGaji/{id_gaji}','GajiController@hapus');
//Route::post('projectku', 'TableController@table');
Route::post('gajiku', 'GajiController@store');

//Calender
Route::get('projectku/calender', 'CalenderController@calender');


//tutup calender

//Chartjs
Route::get('projectku/chart', 'ChartController@chart');
//Chartjs

//Route PDF
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/cetak_pdf', 'PegawaiController@cetak_pdf');

//Route PDF Gaji
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/gaji/cetak_pdf', 'GajiPDFController@cetak_pdf');

//Route Report Pcs
Route::get('projectku/reportPcs', 'PcsController@table')->name('reportPcs');
Route::get('projectku/formPcs', 'PcsController@add')->name('addPcs');
Route::get('projectku/editPcs/{id}','PcsController@editPcs');
Route::post('projectku/updatePcs','PCsController@updatePcs');
Route::get('projectku/hapusPcs/{id}','PcsController@hapus');

Route::post('pcsku', 'PcsController@store');
//Tutup Pcs

//excel
Route::get('/ReportExcel', 'ReportController@index');
Route::get('/Report/export_excel', 'ReportController@export_excel');
Route::get('/laporan', 'LaporanController@index');
Route::post('/laporan/import_excel', 'LaporanController@import_excel');

//Tampil Data
Route::get('projectku/tampilData', 'TampilDataController@tampil');

Route::resource('projectku/daterange', 'DateRangeController');

//Email
Route::get('/sendemail','EmailController@index');

//email
Route::get('/email', function () {
    return view('projectku.send_email');
});
Route::post('/sendEmail', 'Emailku@sendEmail');
