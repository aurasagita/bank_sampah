<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use App\Models\NasabahModel;
<<<<<<< HEAD
use App\Models\SampahModel;
use App\Models\SopirModel;
use App\Models\TransaksiBaruModel;
use App\Models\TransaksiModel;
=======
use App\Models\User;
>>>>>>> 4829750cd37d20552c6e1e29d0452a21b93bf78d
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
        $jadwal = TransaksiBaruModel::where('id_nasabah', $user->nasabah->id)->get();
        $nasabah = NasabahModel::where('email', $user->email)->first();
        return view('pagenasabah.nasabah', compact('jadwal'), compact('nasabah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nasabah = Auth::user()->nasabah;
        $sampah = SampahModel::all();
        //$jadwalUser = JadwalModel::where('id_nasabah', $user->id)->first();
       
        return view('pagenasabah.create_jadwal',['sampah'=>$sampah,'nasabah'=>$nasabah])
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
<<<<<<< HEAD
        for($i = 0; $i < $request->counter; $i++){
            $berat = $request['berat_'.$i];
            $jenisSampah = SampahModel::find($request['jenis_sampah_'.$i]);
            $harga = $jenisSampah->harga * $berat;

            TransaksiBaruModel::insert([
                'id_nasabah' => $request->id_nasabah,
                'jenis_sampah' => $request['jenis_sampah_'.$i],
                'berat' => $berat,
                'harga' => $harga,
            ]);
            
        }
        

        //$data = JadwalModel::create($request->except(['_token']));
=======
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

>>>>>>> 4829750cd37d20552c6e1e29d0452a21b93bf78d
        return redirect('jadwalnasabah')
            ->with('success', 'Jadwal Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        $jadwal = TransaksiBaruModel::where('id', $id)->get();
        return view('pagenasabah.detail_jadwal', ['jadwal' => $jadwal[0]]);
=======
        $user = Auth::user();
        $jadwal = JadwalModel::where('id', $id)->get();
        $nasabah = NasabahModel::where('email', $user->email)->first();
        return view('pagenasabah.detail_jadwal', compact('nasabah'), ['jadwal' => $jadwal[0]]);
>>>>>>> 4829750cd37d20552c6e1e29d0452a21b93bf78d
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