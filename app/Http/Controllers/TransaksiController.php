<?php

namespace App\Http\Controllers;

use App\Models\TransaksiModel;
use App\Http\Controllers\Controller;
use App\Models\JadwalModel;
use App\Models\SampahModel;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trs = TransaksiModel::with('transaksi')->get();
        //$jdw = DB::table('jadwal')->paginate(5);
        return view('transaksi.transaksi',['trs' => $trs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadwal = JadwalModel::all();
        $sampah = SampahModel::all();
        return view('transaksi.create_transaksi',['jdw'=>$jadwal],['smp'=>$sampah])
        ->with('url_form', url('/transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_jadwal' => 'required',
            'jenis_sampah'=>'required',
            'berat'=>'required',
            'harga'=>'required'
        ]);

        TransaksiModel::insert($request->except(['_token']));

        //$data = JadwalModel::create($request->except(['_token']));
        return redirect('transaksi')
            ->with('success', 'Transaksi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function show(TransaksiModel $transaksiModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TransaksiModel $transaksiModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransaksiModel $transaksiModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransaksiModel $transaksiModel)
    {
        //
    }
}
