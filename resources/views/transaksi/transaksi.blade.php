@extends('layouts.template')

@section('content')
<section class="content">
  <div >
    {{Breadcrumbs::render('transaksi')}}
  </div>
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
           <h3 class="card-title"><b>Daftar Transaksi</b></h3>
          </div>
          <div class="card-body">
            <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
              <a href="{{url('transaksi/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
              <form class="form" method="get" action="{{ url('searchJdw') }}" class="col-md-4" style="padding: 0">
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
                  <th>Jenis Sampah</th>
                  <th>Berat</th>
                  <th>Harga</th>
                </tr>
              </thead>
              <tbody>
                @if ($trs ->count() > 0)
                  @foreach ($trs as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->id_jadwal}}</td>
                      <td>{{$k->jenis_sampah}}</td>
                      <td>{{$k->berat}}</td>
                      <td>{{$k->harga}}</td>
                      <td>
                        <a href="{{url('/transaksi/'. $k->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                        <form class="d-inline-block" method="POST" action="{{url('/transaksi/'.$k->id)}}" onsubmit="return confirm('Yakin hapus data?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>

                        <a href="{{url('/transaksi/'. $k->id)}}"class="btn btn-sm btn-primary d-inline-block">Detail</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="5" class="text-center">Data tidak ada</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
    </div>
</section>
    
@endsection