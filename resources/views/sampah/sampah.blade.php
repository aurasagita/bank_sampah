@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
           <h3 class="card-title"><b>Daftar Sampah</b></h3>
          </div>
          <div class="card-body">
            <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
              <a href="{{url('sampah/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
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
                  <th>No</th>
                  <th>Jenis Sampah</th>
                  <th>Harga </th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @if ($sampah ->count() > 0)
                  @foreach ($sampah as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->jenis_sampah}}</td>
                      <td>{{$k->harga}}</td>
                      <td>
                        <a href="{{url('/sampah/'. $k->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                        <form class="d-inline-block" method="POST" action="{{url('/sampah/'.$k->id)}}" onsubmit="return confirm('Yakin hapus data?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="8" class="text-center">Data tidak ada</td>
                  </tr>
                @endif
              </tbody>
            </table>
            <br/>
          
          </div>
        </div>
    </div>
</section>
    
@endsection