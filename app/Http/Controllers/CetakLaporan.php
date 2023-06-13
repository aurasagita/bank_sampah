<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use App\Models\SampahModel;
use App\Models\TransaksiBaruModel;
use App\Models\TransaksiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class CetakLaporan extends Controller
{
    public function index(){
        return view('laporan.laporan');
    }
    
    public function cetak(Request $request)
    {
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');
        
        // Query data berdasarkan filter tanggal pembuatan
        $transaksi = TransaksiBaruModel::whereBetween('created_at', [$tanggalAwal, $tanggalAkhir])->get();
        
        // Buat view PDF menggunakan DOMPDF
        $pdf = PDF::loadView('laporan.export_pdf', compact('transaksi'));

        // Return PDF untuk diunduh
        return $pdf->download('laporan.pdf');
    }
}

