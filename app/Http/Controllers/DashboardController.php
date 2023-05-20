<?php

namespace App\Http\Controllers;


use App\Models\JadwalModel;
use App\Models\SampahModel;
use Illuminate\Http\Request;
use App\Models\TransaksiModel;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Database\Data;


class DashboardController extends Controller
{
    public function index(Request $request) {

        
        
      $transaksi = TransaksiModel::with('transaksi')->get();
      return view('layouts.dashboard',['transaksi'=> $transaksi]);
}


    // public function show($id)
    // {
    //     $transaksi = TransaksiModel::where('id', $id)->get();
    //     $jadwal = JadwalModel::where('id', $id)->get();
    //     return view('transaksi.detail_transaksi', ['trs' => $transaksi[0]]);

    // }

}