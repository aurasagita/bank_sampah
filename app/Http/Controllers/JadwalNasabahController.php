<?php

namespace App\Http\Controllers;

use App\Models\JadwalNasabahModel;
use App\Models\jadwal_nasabah;
use App\Models\NasabahModel;
use Illuminate\Http\Request;

class JadwalNasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $nasabah = NasabahModel::where('nama','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $nasabah = NasabahModel::paginate(5);
        }
       
        return view('nasabah.jadwal_nasabah')->with('nasabah_jadwal',$nasabah);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nasabah.create_nasabah')
            ->with('url_form', url('/nasabah'));
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
            'id_nasabah'=>'required|string|max:10|unique:nasabah,id_nasabah',
            'id_jadwal'=>'required',
            'nama'=>'required|string|max:50',
            'alamat'=>'required|string|max:255',
            'phone'=>'required|digits_between:5, 15'
        ]);

        $data = NasabahModel::create($request->except(['_token']));
        return redirect('nasabah')->with('success', 'Nasabah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NasabahModel  $jadwal_nasabah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nasabah = NasabahModel::where('id', $id)->get();
        return view('nasabah.detail_jadwal_nasabah', ['nasabah' => $nasabah[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalNasabahModel  $jadwal_nasabah
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalNasabahModel $jadwal_nasabah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalNasabahModel  $jadwal_nasabah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalNasabahModel $jadwal_nasabah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalNasabahModel  $jadwal_nasabah
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalNasabahModel $jadwal_nasabah)
    {
        //
    }
}
