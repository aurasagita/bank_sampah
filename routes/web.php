<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\SopirController;
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

Route::get('/index', [IndexController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('/jadwal',JadwalController::class)->parameter('jadwal','id');
Route::get('/nasabah', [NasabahController::class, 'index']);
Route::get('/sopir', [SopirController::class, 'index']);


