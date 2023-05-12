<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\JadwalModel;
use App\Models\NasabahModel;
use App\Models\SopirModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jdw = JadwalModel::with('jadwal')->get();
        //$jdw = DB::table('jadwal')->paginate(5);
        return view('jadwal.jadwal',['jadwal' => $jdw]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nasabah = NasabahModel::all();
        $sopir = SopirModel::all();
        return view('jadwal.create_jadwal',['nasabah'=>$nasabah],['sopir'=>$sopir])
        ->with('url_form', url('/jadwal'));
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
            'id_jadwal' => 'required|string|max:10|unique:jadwal,id_jadwal',
            'id_nasabah'=>'required',
            'id_sopir'=>'required',
            'tanggal_pengambilan'=>'required|date',
            'konfirmasi'=>'required|string'
        ]);

        JadwalModel::insert($request->except(['_token']));

        //$data = JadwalModel::create($request->except(['_token']));
        return redirect('jadwal')
            ->with('success', 'Jadwal Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = JadwalModel::find($id);
        return view('jadwal.create_jadwal')
        ->with('jdw', $jadwal)
        ->with('url_form',url('/jadwal/' . $id));
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
            'id_jadwal' => 'required|string|max:10|unique:jadwal,id_jadwal'.$id,
            'nama' => 'required|string|max:25',
            'tanggal_mulai' => 'required|string|max:25',
            'tanggal_akhir' => 'required|string|max:25',
        ]);

        $data = JadwalModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('jadwal')
            ->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalModel $jadwal)
    {
        //
    }
}
