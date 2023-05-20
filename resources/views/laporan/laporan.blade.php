@extends('layouts.template')

@section('content')
<section class="content">
  <div >
    {{Breadcrumbs::render('transaksi')}}
  </div>
  <div class="form-group text-left">
    <a href="{{url('/grafik_penjualan/')}}" class="btn btn-sm btn-success">Lihat Grafik</a>
</div>
<div class="card">
  <div class="card-body">
    <div class="input-group mb-3 mt-2">
     <label class="mb-3">Tanggal Awal <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control"></label>
     
    </div>
    <div class="input-group mb-3">
     <label for="label">Tanggal Akhir<input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control"></label>
     
    </div>
   
 </div>
 </div>
 <div class="input-group mb-3">
  <a href="" class="btn btn-sm btn-primary" onclick="this.href='cetakTanggal/'+ document.getElementById('tanggal_awal').value + '/' + document.getElementById('tanggal_akhir').value " target="_blank">Cetak</a>
   </div>
</div>
    
    
</section>
    
@endsection