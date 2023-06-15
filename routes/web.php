<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CetakLaporan;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\PageNasabahController;
use App\Http\Controllers\PageSopirController;
use App\Http\Controllers\SampahController;
use App\Http\Controllers\SopirController;
use App\Http\Controllers\TransaksibaruController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();
Route::get('/logout',[LoginController::class,'logout']);

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Route::resource('user', UserController::class);
    Route::resource('/jadwalnew',TransaksibaruController::class)->parameter('transaksibaru','id');
    Route::resource('/jadwal',JadwalController::class)->parameter('jadwal','id'); 
    Route::resource('/nasabah', NasabahController::class)->parameter('nasabah','id');
    Route::post('nasabah/data',[NasabahController::class,'data']);
    Route::resource('/sampah', SampahController::class)->parameter('sampah', 'id');
    Route::resource('/sopir', SopirController::class)->parameter('sopir', 'id');
    Route::post('sopir/data',[SopirController::class,'data']);
    Route::resource('/transaksi', TransaksiController::class)->parameter('transaksi', 'id');
    Route::get('/laporan',[CetakLaporan::class,'index']);
    Route::post('/laporan/cetak', [CetakLaporan::class,'cetak'])->name('laporan.cetak');
    Route::get('/grafik_penjualan',[TransaksibaruController::class,'grafik']);
    Route::get('/cetakTanggal/{tanggal_awal}/{tanggal_akhir}',[CetakLaporan::class,'cetakTanggal']);
});

Route::group(['middleware' => ['auth', 'role:nasabah']], function(){
    Route::resource('/jadwalnasabah', PageNasabahController::class)->parameter('pagenasabah', 'id');
});

Route::group(['middleware' => ['auth', 'role:sopir']], function(){
    Route::resource('/jadwalsopir', PageSopirController::class)->parameter('jadwalsopir', 'id');
    Route::post('/jadwalsopir/data', [PageSopirController::class, 'data'])->name('jadwalsopir.data');
});

Route::get('/index', [IndexController::class, 'index']);

Route::get('/', [IndexController::class, 'index'])->name('home');
