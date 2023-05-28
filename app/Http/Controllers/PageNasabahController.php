<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use App\Models\NasabahModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        $nasabah = NasabahModel::where('email', $user->email)->first();
        return view('pagenasabah.nasabah', compact('jadwalUser'), compact('nasabah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $nasabah = NasabahModel::where('id', $user->id)->first();
        //$jadwalUser = JadwalModel::where('id_nasabah', $user->id)->first();
        return view('pagenasabah.create_jadwal', compact('nasabah'))
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
            'konfirmasi'=>'required|string',
            'nama'=>'required|string|max:50',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'alamat'=>'required|string|max:255',
            'phone'=>'required|digits_between:5, 15',
            'email'=>'required|string|unique:users,email',
            'password' => 'required|string|min:4'
        ]);

        if ($request->file('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = 'sopir-' . 'nama' . '.' . $extension;
            $image_name = $file->storeAs('sopirprofile', $filename, 'public');
        }

        User::create([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => 'nasabah',
        ]);

        NasabahModel::create([
            'id_nasabah' => $request->input('id_nasabah'),
            'nama' => $request->input('nama'),
            'foto' => $image_name,
            'alamat' => $request->input('alamat'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        JadwalModel::create([
            'id_nasabah'=> $request->input('id_nasabah'),
            'id_sopir'=> $request->input('id_sopir'),
            'tanggal_pengambilan'=> $request->input('tanggal_pengambilan'),
            'konfirmasi'=> $request->input('konfirmasi'),
        ]);

        return redirect('jadwalnasabah')
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
        $user = Auth::user();
        $jadwal = JadwalModel::where('id', $id)->get();
        $nasabah = NasabahModel::where('email', $user->email)->first();
        return view('pagenasabah.detail_jadwal', compact('nasabah'), ['jadwal' => $jadwal[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nasabah = NasabahModel::find($id);
        return view('layouts.aaa')
        ->with('nasabah', $nasabah)->with('url_form', url('/pagenasabah/'.$id));
        // $user = Auth::user();
        // //$jadwalUser = JadwalModel::where('id_nasabah', $user->id)->get();
        // $nasabah = NasabahModel::where('email', $user->email)->first();
        // return view('pagenasabah.navbar', compact('nasabah'));
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
        $request->validate([
            'id_nasabah'=>'required|string|max:10|unique:nasabah,id_nasabah,'.$id,
            'nama'=>'required|string|max:50',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
            'alamat'=>'required|string|max:255',
            'phone'=>'required|digits_between:5, 15',
        ]);

        $nasabah = NasabahModel::find($id);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = 'nasabahprofile/'.'nasabah-' . $nasabah->nama . '.' . $foto->getClientOriginalExtension();
            !is_null($nasabah->foto) && Storage::delete($nasabah->foto);

            $foto->storeAs('nasabahprofile', $fotoName, 'public');
            $nasabah->foto = $fotoName;
        }
        
        NasabahModel::where('id', $id)->update([
            'id_nasabah' => $request->id_nasabah,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        $nsb = User::where('email', $nasabah->email)->first();
        
        User::where('email', $nsb->email)->update([
            'name' => $request->nama,
            'email' => $request->email,
        ]);  
        
        $nasabah->save();

        if ($request->filled('password')) {
            $user = User::where('email', $nasabah->email)->first();
            $nasabah->password = Hash::make($request->password);
            $user->save();
        }

        return redirect('nasabah')
            ->with('success', 'Nasabah Berhasil Ditambahkan');
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