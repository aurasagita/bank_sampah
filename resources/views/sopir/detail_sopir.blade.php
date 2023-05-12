@extends('layouts.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DATA SOPIR</h3>

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
                <li class="list-group-item"><b>Id Sopir : </b>{{$sopir->id_sopir}}</li>
                <li class="list-group-item"><b>Nama : </b>{{$sopir->nama}}</li>
                <li class="list-group-item"><b>Alamat : </b>{{$sopir->alamat}}</li>
                <li class="list-group-item"><b>No. Telepon : </b>{{$sopir->phone}}</li>
            </ul>
            <a class="btn btn-success mt-3" href="{{ url('/sopir') }}">Kembali</a>
        </div>
        
    </div>
       
      
    <!-- /.card -->

    </section>
@endsection