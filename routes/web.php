<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\PageNasabahController;
use App\Http\Controllers\SampahController;
use App\Http\Controllers\SopirController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/logout',[LoginController::class,'logout']);

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/jadwal',JadwalController::class)->parameter('jadwal','id');
    Route::resource('/nasabah', NasabahController::class)->parameter('nasabah', 'id');
    Route::resource('/sampah', SampahController::class)->parameter('sampah', 'id');
    Route::resource('/sopir', SopirController::class)->parameter('sopir', 'id');
    Route::resource('/transaksi', TransaksiController::class)->parameter('transaksi', 'id');
    Route::get('/grafik_penjualan',[TransaksiController::class,'grafik']);
});

Route::group(['middleware' => ['auth', 'role:nasabah']], function(){
    Route::resource('/pagenasabah', PageNasabahController::class)->parameter('pagenasabah', 'id');
});

Route::group(['middleware' => ['auth', 'role:sopir']], function(){
    
});

Route::get('/index', [IndexController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
