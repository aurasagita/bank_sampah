<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use App\Models\NasabahModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageNasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $jadwalUser = JadwalModel::where('id_nasabah', $user->id)->get();
        return view('pagenasabah.nasabah', compact('jadwalUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $jadwalUser = JadwalModel::where('id_nasabah', $user->id)->first();
        return view('pagenasabah.create_jadwal', compact('jadwalUser'))
        ->with('url_form', url('/jadwalnasabah'));
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
            'id_nasabah'=>'required',
            'id_sopir'=>'required',
            'tanggal_pengambilan'=>'required|date',
            'konfirmasi'=>'required|string'
        ]);

        JadwalModel::insert($request->except(['_token']));
        return redirect('jadwal')
            ->with('success', 'Jadwal Berhasil Ditambahkan');
        //return redirect('jadwalnasabah')->with('success', 'Jadwal Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
