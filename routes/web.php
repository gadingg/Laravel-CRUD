<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;



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
    return view('welcome');
});


Route::resource('/mahasiswa', MahasiswaController::class);
Route::get('/layouts/beranda', [HomeController::class, 'beranda']);
Route::get('/home/penggunaan_layout', [HomeController::class, 'penggunaan_layout']);
