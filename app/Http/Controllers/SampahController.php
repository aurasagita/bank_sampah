<?php

namespace App\Http\Controllers;

use App\Models\SampahModel;
use Illuminate\Http\Request;

class SampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $sampah = SampahModel::where('jenis_sampah','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $sampah = SampahModel::paginate(5);
        }
       
        return view('sampah.sampah')->with('sampah',$sampah);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('sampah.create_sampah')
        ->with('url_form',url('/sampah'));
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
            
            'jenis_sampah'=>'required|string|max:30',
            'harga'=>'required|integer'
            

            
        ]);
        $data = SampahModel::create($request->except(['_token']));

        return redirect('sampah')
            ->with('success','Mahasiswa berhasil ditambahkan');
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
        $sampah=SampahModel::find($id);
        return view('sampah.create_sampah')
            ->with('sampah', $sampah)
            ->with('url_form',url('/sampah/'. $id));
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
            
            'jenis_sampah'=>'required|string|max:30',
            'harga'=>'required|integer'    
        ]);
        $data = SampahModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('sampah')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        SampahModel::where('id','=',$id)->delete();
        return redirect('sampah')
        ->with('success','Mahasiswa Berhasil Dihapus');
    }
}
