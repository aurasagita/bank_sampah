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
                <li class="list-group-item"><b>Id Jadwal    : </b>{{$jadwal->id_jadwal}}</li>
                <br>

                    <li class="list-group-item"><b>Nama Sopir</b>     : {{$jadwal->sopir->nama}}</li>
                    <li class="list-group-item"><b>Nomor HP Sopir </b>         : {{$jadwal->sopir->phone}}</li>
                <br>
                <li class="list-group-item"><b>Tanggal Pengambilan : </b>{{$jadwal->tanggal_pengambilan}}</li>
                <li class="list-group-item"><b>Konfirmasi :  </b>{{$jadwal->konfirmasi}}</li>
            </ul>
            <a class="btn btn-success mt-3" href="{{ url('/jadwalnasabah') }}">Kembali</a>
        </div>
        
    </div>
       
      
    <!-- /.card -->

    </section>
@endsection