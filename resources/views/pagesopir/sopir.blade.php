@extends('layouts.sidebar_sopir')
@section('content')
<section class="content">
  <div >
    {{Breadcrumbs::render('jadwal')}}
  </div>
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between"><h3 class="card-title"><b>Daftar Jadwal Sopir</b></h3></div>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Id Jadwal</th>
                  <th>Nama Nasabah</th>
                  <th>Nama Sopir</th>
                  <th>Tanggal Ambil</th>
                  <th>Alamat Pengambilan</th>
                  <th>Konfirmasi</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if ($jadwalUser ->count() > 0)
                  @foreach ($jadwalUser as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->id_jadwal}}</td>
                      <td>{{$k->nasabah->nama}}</td>
                      <td>{{$k->sopir->nama}}</td>
                      <td>{{$k->tanggal_pengambilan}}</td>
                      <td>{{$k->nasabah->alamat}}</td>
                      <td>{{$k->konfirmasi}}</td>
                     <td><div class="pr-1">
                        <a href="{{url('/jadwalsopir/'. $k->id)}}"class="btn btn-sm btn-primary"><i class="fas fa fa-info-circle"></i></a>
                        <a href="{{url('/jadwalsopir/'. $k->id.'/edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                    </div></td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="7" class="text-center">Data tidak ada</td>
                  </tr>
                @endif
              </tbody>
            </table>
            
          </div>
        </div>
        
</section>
    
@endsection