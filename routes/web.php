<?php

use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Auth::routes();

Route::get('home', function () {
    return redirect('records');
});

// Route::get(
//     '/records',
//     ['middleware' => 'adminCheck', function () {
//         return view('/records');
//     }]
// );

// Route::post(
//     '/addrecord',
//     ['middleware' => 'adminCheck', function () {
//         return view('/addrecord');
//     }]
// );

Route::get('/records', 'RecordController@index')->name('records')->middleware('auth');
Route::get('/addrecord', 'AddRecordController@index')->name('addrecord')->middleware('auth');
Route::post('/addrecord', 'AddRecordController@store')->name('addrecord')->middleware('auth');
Route::get('/action', 'RecordController@action')->name('record.action');
Route::post('/record', 'RecordController@record');
Route::get('/records/search', 'RecordController@record');
Route::post('/record/update', 'RecordController@update');
Route::post('/record/delete', 'RecordController@destroy');
// Export to excel
Route::get('/record/exportExcel','RecordExportController@export')->name('export_excel.excel');
// Route::post('/import', 'RecordImportController@show');
Route::post('/import_excel/import', 'RecordImportController@import');
// Route::post('/import', 'RecordImportController@store')->name('import_excel.excel');

