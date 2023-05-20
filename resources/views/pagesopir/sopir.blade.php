@extends('layouts.template')

@section('content')
<section class="content">
  <div >
    {{Breadcrumbs::render('jadwal')}}
  </div>
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
           <h3 class="card-title"><b>Daftar jadwal_user</b></h3>
          </div>
         
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Id Jadwal</th>
                  <th>Id Nasabah</th>
                  <th>Id Sopir</th>
                  <th>Tanggal Ambil</th>
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
                      <td>{{$k->nasabah->id_nasabah}}</td>
                      <td>{{$k->sopir->id_sopir}}</td>
                      <td>{{$k->tanggal_pengambilan}}</td>
                      <td>{{$k->konfirmasi}}</td>
                     
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
    </div>
</section>
    
@endsection