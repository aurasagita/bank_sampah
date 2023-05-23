<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Http\Controllers\Controller;
use App\Models\NasabahModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $nasabah = NasabahModel::where('nama','LIKE','%'.$request->search.'%')->paginate(25);
        }else{
            $nasabah = NasabahModel::paginate(25);
        }
       
        return view('nasabah.nasabah')->with('nasabah',$nasabah);
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
            'nama'=>'required|string',
            'alamat'=>'required|string|max:255',
            'phone'=>'required|digits_between:5, 15',
            'email'=>'required|string|unique:users,email',
            'password' => 'required|string|min:4'
        ]);

        User::create([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => 'nasabah',
        ]);
        NasabahModel::create([
            'id_nasabah' => $request->input('id_nasabah'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'phone' => $request->input('phone'),
        ]);

        return redirect('nasabah')->with('success', 'Nasabah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nasabah = NasabahModel::where('id', $id)->get();
        return view('nasabah.detail_nasabah', ['nasabah' => $nasabah[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nasabah = NasabahModel::find($id);
        return view('nasabah.create_nasabah')
        ->with('nsb', $nasabah)->with('url_form', url('/nasabah/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_nasabah'=>'required|string|max:10|unique:nasabah,id_nasabah,'.$id,
            'nama'=>'required|string|max:50',
            'alamat'=>'required|string|max:255',
            'phone'=>'required|digits_between:5, 15'
        ]);

        $data = NasabahModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('nasabah')
            ->with('success', 'Nasabah Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           NasabahModel::where('id', '=', $id)->delete();
           return redirect('nasabah')->with('success', 'Nasabah Berhasil Dihapus');
    }
}
