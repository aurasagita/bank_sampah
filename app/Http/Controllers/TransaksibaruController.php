<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\JadwalModel;
use App\Models\NasabahModel;
use App\Models\SampahModel;
use App\Models\SopirModel;
use App\Models\TransaksiBaruModel;
use App\Models\TransaksiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksibaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $jadwal = TransaksiBaruModel::where('id_transaksibaru','LIKE','%'.$request->search.'%')->paginate(25);
        }else{
            $jadwal = TransaksiBaruModel::paginate(25);
        }
       
        return view('jadwal.jadwal')->with('jadwal',$jadwal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $sampah = SampahModel::all();
        $nasabah = NasabahModel::all();
        $sopir = SopirModel::all();
        
        return view('jadwal.create_jadwal',['sampah'=>$sampah,'nasabah'=>$nasabah,'sopir'=>$sopir])
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
            'id_transaksibaru' => 'required|string|max:10|unique:transaksibaru,id_transaksibaru',
            'id_nasabah'=>'required',
            'id_sopir'=>'required',
            'tanggal_pengambilan'=>'required|date',
            'konfirmasi'=>'required|string',
            'jenis_sampah'=>'required',
            'berat'=>'required',
            'harga'=>'required'
        ]);
        TransaksiBaruModel::insert($request->except(['_token']));

        //$data = JadwalModel::create($request->except(['_token']));
        return redirect('jadwal')
            ->with('success', 'Jadwal Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransaksiBaruModel  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal = TransaksiBaruModel::where('id', $id)->get();
        return view('jadwal.detail_jadwal', ['jdw' => $jadwal[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = TransaksiBaruModel::find($id);
        $sampah = SampahModel::all();
        $nasabah = NasabahModel::all();
        $sopir = SopirModel::all();
        return view('jadwal.edit_jadwal', compact('id'))
        ->with('url_form', url('/jadwal/' . $id))
        ->with('jdw', $jadwal)
        ->with('nasabah', $nasabah)
        ->with('sampah',$sampah)
        ->with('sopir', $sopir);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransaksiModel  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_transaksibaru' => 'required|string|max:10|unique:transaksibaru,id_transaksibaru,'.$id,
            'id_nasabah'=>'required',
            'id_sopir'=>'required',
            'tanggal_pengambilan'=>'required|date',
            'konfirmasi'=>'required|string',
            'jenis_sampah'=>'required',
            'berat'=>'required',
            'harga'=>'required'
        ]);

        $data = TransaksiBaruModel::where('id', '=', $id)->update($request->except(['_token', '_method']));

        return redirect('jadwal')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TransaksiBaruModel::where('id', '=', $id)->delete();
        return redirect('jadwal')
            ->with('success', 'Jadwal Berhasil Dihapus');
    }
    public function grafik(Request $request){

        $harga = TransaksiBaruModel::select(DB::raw("CAST(SUM(harga)as int) as harga"))
        ->whereYear("created_at",date('Y'))
        ->GroupBy(DB::raw("Month(created_at)"))
        ->pluck('harga');
       
        $bulan = TransaksiBaruModel::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->whereYear("created_at",date('Y'))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulan');
       
        return view('laporan.penjualan_grafik',compact('harga','bulan'));
    }
}
