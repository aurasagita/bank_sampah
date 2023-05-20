<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageSopirController extends Controller
{
    public function index(){
        $user = Auth::user();
        $jadwalUser = JadwalModel::where('id_sopir', $user->id)->get();
        return view('pagesopir.sopir', compact('jadwalUser'));
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
        $jadwal = JadwalModel::where('id', $id)->get();
        return view('pagesopir.detail_jadwal', ['jadwal' => $jadwal[0]]);
    }
}
