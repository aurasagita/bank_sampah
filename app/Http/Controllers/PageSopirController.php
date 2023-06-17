<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use App\Models\NasabahModel;
use App\Models\SampahModel;
use App\Models\SopirModel;
use App\Models\TransaksiBaruModel;
use App\Models\TransaksiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageSopirController extends Controller
{
    public function index(){
        $user = Auth::user();
        $sopir = SopirModel::where('email', $user->email)->first();
        $jadwalUser = TransaksiBaruModel::where('id_sopir', $user->sopir->id)->get();
        $transaksi = JadwalModel::where('id_sopir', $user->sopir->id)->get();
        return view('pagesopir.sopir', compact('jadwalUser', 'sopir', 'transaksi'));
    }

     public function show($id)
    {
        $user = Auth::user();
        $sopir = SopirModel::where('email', $user->email)->first();
        //$jadwal = TransaksiBaruModel::where('id', $id)->get();
        $jadwal = JadwalModel::where('id', $id)->first();
        $idtrans = $jadwal->id_jadwal;
        $transaksi = TransaksiBaruModel::where('id_transaksibaru', $idtrans)->get();
        return view('pagesopir.detail_jadwal', ['jadwal' => $jadwal[0]], compact('sopir', 'transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $confirm = 'Pick Up';
        $findJdw = JadwalModel::where('id', '=', $id)->first();

        JadwalModel::where('id', '=', $id)->update([
            'konfirmasi' => $confirm
        ]);
        TransaksiBaruModel::where('id_transaksibaru', '=', $findJdw->id_jadwal)->update([
            'konfirmasi' => $confirm
        ]);

        return redirect('jadwalsopir')
            ->with('success', 'Sampah Berhasil Di-Pick Up');
    }

}
