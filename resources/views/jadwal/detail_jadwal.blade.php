@extends('layouts.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DETAIL JADWAL</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Id Jadwal    : </b>{{$jdw->id_transaksibaru}}</li>
                <br>

                <li class="list-group-item"><b>Id Nasabah   : </b>{{$jdw->nasabah->id_nasabah}} </li>
                    <li class="list-group-item"><b>Nama Nasabah</b>     : {{$jdw->nasabah->nama}}</li>
                    <li class="list-group-item"><b>Alamat Nasabah</b>   : {{$jdw->nasabah->alamat}}</li>
                    <li class="list-group-item"><b>Nomor HP Nasabah </b>         : {{$jdw->nasabah->phone}}</li>
                <br>
                <li class="list-group-item"><b>Id Sopir : </b>{{$jdw->sopir->id_sopir}}</li>
                    <li class="list-group-item"><b>Nama Sopir</b>     : {{$jdw->sopir->nama}}</li>
                    <li class="list-group-item"><b>Alamat Sopir</b>   : {{$jdw->sopir->alamat}}</li>
                    <li class="list-group-item"><b>Nomor HP Sopir </b>         : {{$jdw->sopir->phone}}</li>
                <br>
               
                    <li class="list-group-item"><b>Jenis Sampah</b>     : {{$jdw->sampah->jenis_sampah}}</li>
                    <li class="list-group-item"><b>Berat</b>   : {{$jdw->berat}}</li>
                    <li class="list-group-item"><b>Harga</b>         : {{$jdw->harga}}</li>
                <br>
                <li class="list-group-item"><b>Tanggal Pengambilan : </b>{{$jdw->tanggal_pengambilan}}</li>
                <li class="list-group-item"><b>Konfirmasi :  </b>{{$jdw->konfirmasi}}</li>
            </ul>
            <a class="btn btn-success mt-3" href="{{ url('/jadwal') }}">Kembali</a>
        </div>
        
    </div>
       
      
    <!-- /.card -->

    </section>
@endsection