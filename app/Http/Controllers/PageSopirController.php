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
        return view('pagesopir.sopir', compact('jadwalUser'), compact('sopir'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_jadwal' => 'required|string|max:10|unique:jadwal,id_jadwal',
            'id_nasabah'=>'required',
            'id_sopir'=>'required',
            'tanggal_pengambilan'=>'required|date',
            'konfirmasi'=>'required|string'
        ]);

        JadwalModel::insert($request->except(['_token']));

        //$data = JadwalModel::create($request->except(['_token']));
        return redirect('jadwalsopir')
            ->with('success', 'Jadwal Berhasil Ditambahkan');
    }
     public function show($id)
    {
        $user = Auth::user();
        $sopir = SopirModel::where('email', $user->email)->first();
        $jadwal = TransaksiBaruModel::where('id', $id)->get();
        return view('pagesopir.detail_jadwal', ['jadwal' => $jadwal[0]], compact('sopir'));
    }
    public function edit($id)
    {
        // $user = Auth::user();
        // $sopir = SopirModel::where('email', $user->email)->first();

        $jadwal = TransaksiBaruModel::where('id', $id)->first();
        $sampah = SampahModel::all();
        $nasabah = NasabahModel::all();
        $spr = SopirModel::all();
        return view('pagesopir.edit_status', compact('id'))
            ->with('url_form', url('/jadwalsopir/' . $id))
            ->with('jdw', $jadwal)
            ->with('nasabah', $nasabah)
            ->with('sampah', $sampah)
            ->with('sopir', $spr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'konfirmasi'=>'required|string'
        ]);

        $data = TransaksiBaruModel::where('id', '=', $id)->update($request->except(['_token', '_method']));

        return redirect('jadwalsopir')->with('success', 'Data Berhasil Diedit');
    }

}
