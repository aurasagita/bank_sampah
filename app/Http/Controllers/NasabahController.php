<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Http\Controllers\Controller;
use App\Models\NasabahModel;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nasabah = NasabahModel::all();
        return view('nasabah.nasabah')->with('nsb', $nasabah);
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
     * @param  \App\Models\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function show(NasabahModel $nasabah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function edit(NasabahModel $nasabah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NasabahModel $nasabah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function destroy(NasabahModel $nasabah)
    {
        //
    }
}
