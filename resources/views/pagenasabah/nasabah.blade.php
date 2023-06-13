@extends('layouts.sidebar_sopir')

@section('content')
<section class="content">
  <div >
    {{Breadcrumbs::render('jadwalnasabah')}}
  </div>
  <?php
                  
  $total = 0;
  $jumlah = 0;

  if ($jadwal->count() > 0) {
      foreach ($jadwal as $i => $k) {
          // Calculate the total
          $total += $k->harga;
      }
  }
  
  ?>
  <div class="tab-content">
    <div class="tab-pane fade show active" id="saldo">
      <div class="row justify-content-end">
        <div class="col-lg-12 col-3">
          <div class="small-box bg-success">
            <div class="inner text-center">
              <h5>Anda telah menyetorkan sampah senilai <b>Rp {{$total}},00</b></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="card">
      <div class="container-fluid">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
           <h3 class="card-title"><b>Riwayat Transaksi </b></h3>
          </div>
          <br>
          <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
              <a href="{{url('jadwalnasabah/create')}}" class="btn -btn sm btn-success my-2">Buat Jadwal</a>

            </div>
            </div>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Id Jadwal</th>
                  <th>Nama Sopir</th>
                  <th>Tanggal Ambil</th>
                  <th>Berat</th>
                  <th>Jenis Sampah</th>
                  <th>Total</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if ($jadwal ->count() > 0)
                  @foreach ($jadwal as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->id_transaksibaru}}</td>
                      <td>{{$k->sopir->nama ?? "Tidak ada sopir"}}</td>
                      <td>{{$k->tanggal_pengambilan}}</td>
                      <td>{{$k->berat}}</td>
                      <td>{{$k->sampah->jenis_sampah}}</td>
                      <td>Rp{{$k->harga}},00</td>
                      <td>{{$k->konfirmasi}}</td>
                      <td>
                        <div class="pr-1">
                          <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailModalTransaksi{{$k->id}}"><i class="fas fa fa-info-circle"></i></a>
                        </div>
                      </td>
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
</section>

@foreach ($jadwal as $jadwal)
<!-- Modal Detail-->
<div class="modal fade" id="detailModalTransaksi{{$jadwal->id}}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{$jadwal->id}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel {{$jadwal->id}}">Detail Transaksi
                {{ $jadwal->id_transaksibaru }}
              </h5>
          </div>
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <b>Id Jadwal</b>
                  <span>
                    {{ $jadwal->id_transaksibaru }}
                    </span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <b>Tanggal Ambil</b>
                  <span>
                    {{ $jadwal->tanggal_pengambilan }}
                  </span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <b>Jenis Sampah</b>
                  <span>
                    {{ $jadwal->sampah->jenis_sampah }}
                  </span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <b>Berat</b>
                  <span>
                    {{ $jadwal->berat }}kg
                  </span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <b>Total</b>
                  <span>
                    Rp{{ $jadwal->harga }},00
                  </span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <b>Status</b>
                  <span>
                    {{ $jadwal->konfirmasi }}
                  </span>
                </div>
              </li>
            </ul>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm btn-danger" data-dismiss="modal">Tutup</button>            
          </div>
      </div>
  </div>
</div>
@endforeach
                    
@endsection