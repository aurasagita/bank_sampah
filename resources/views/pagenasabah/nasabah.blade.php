@extends('layouts.sidebar_sopir')

@section('content')
<section class="content">
  <div >
    {{Breadcrumbs::render('jadwal')}}
  </div>
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
           <h3 class="card-title"><b>Riwayat Transaksi </b></h3>
          </div>
          <br>
          <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
              <a href="{{url('jadwalnasabah/create')}}" class="btn -btn sm btn-success my-2">Buat Jadwal</a>
             
            </div>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Id Jadwal</th>
                  <th>Nama Sopir</th>
                  <th>Tanggal Ambil</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if ($jadwalUser ->count() > 0)
                  @foreach ($jadwalUser as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->id_jadwal}}</td>
                      <td>{{$k->sopir->nama}}</td>
                      <td>{{$k->tanggal_pengambilan}}</td>
                      <td>{{$k->konfirmasi}}</td>
                      <td><div class="pr-1">
                        <a href="{{url('/jadwalnasabah/'. $k->id)}}"class="btn btn-sm btn-primary"><i class="fas fa fa-info-circle"></i></a>
                    </div></td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="6" class="text-center">Data tidak ada</td>
                  </tr>
                @endif
              </tbody>
            </table>
            
          </div>
        </div>
    </div>
</section>
    
@endsection