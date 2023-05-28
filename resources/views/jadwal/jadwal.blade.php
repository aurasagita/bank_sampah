@extends('layouts.template')

@section('content')
<section class="content">
  <div >
    {{Breadcrumbs::render('jadwal')}}
  </div>
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
           <h3 class="card-title"><b>Daftar Jadwal</b></h3>
          </div>
          <div class="card-body">
            <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
              <a href="{{url('jadwal/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
              <form class="form" name="search" method="get" action="{{ url('jadwal') }}" class="col-md-4" style="padding: 0">
                <div class="form-group w-100 mb-3">
                    <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                </div>
              </form>
            </div>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Id Jadwal</th>
                  <th>Nama Nasabah</th>
                  <th>Id Sopir</th>
                  <th>Tanggal Ambil</th>
                  <th>Konfirmasi</th>
                  <th>Jenis Sampah</th>
                  <th>Berat</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if ($jadwal ->count() > 0)
                  @foreach ($jadwal as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->id_transaksibaru}}</td>
                      <td>{{$k->nasabah->nama}}</td>
                      <td>{{$k->sopir->id_sopir ?? "Sopir tidak ada"}}</td>
                      <td>{{$k->tanggal_pengambilan}}</td>
                      <td>{{$k->konfirmasi}}</td>
                      <td>{{$k->sampah->jenis_sampah}}</td>
                      <td>{{$k->berat}}</td>
                      <td>Rp{{$k->harga}},00</td>
                      <td>
                        <a href="{{url('/jadwal/'. $k->id.'/edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>

                        <form class="d-inline-block" method="POST" action="{{url('/jadwal/'.$k->id)}}" onsubmit="return confirm('Yakin hapus data?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-solid fa-trash"></i></button>
                        </form>

                        <a href="{{url('/jadwal/'. $k->id)}}"class="btn btn-sm btn-primary d-inline-block"><i class="fas fa fa-info-circle"></i></a>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="7" class="text-center">Data tidak ada</td>
                  </tr>
                @endif
              </tbody>
            </table>
            {{$jadwal->links()}}
          </div>
        </div>
    </div>
</section>
    
@endsection