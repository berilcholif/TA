<?php

use App\Http\Controllers\Firebase\Data_JatuhController;

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
Route::get('data_jatuh', [Data_JatuhController::class, 'index']);
Route::get('add-data', [Data_JatuhController::class, 'create']);
Route::post('add-data', [Data_JatuhController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
