<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use App\Models\SampahModel;
use App\Models\TransaksiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CetakLaporan extends Controller
{
    public function index(){
        return view('laporan.laporan');
    }
    public function cetakTanggal($tanggal_awal, $tanggal_akhir){
       // dd("Tanggal Awal : ".$tanggal_awal, "Tanggal Akhir".$tanggal_akhir);
    
      $transaksi = TransaksiModel::whereBetween('created_at',[$tanggal_awal,$tanggal_akhir])->get();
      return view('laporan.export_pdf', compact('transaksi'));
    }
}
