@extends('layouts.sidebar_sopir')

@section('content')
<section class="content">
  <div >
    {{Breadcrumbs::render('jadwalnasabah')}}
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
            </div>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Id Jadwal</th>
                  <th>Nama Sopir</th>
                  <th>Tanggal Ambil</th>
                  <th>Berat</th>
                  <th>Harga</th>
                  <th>jumlah</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $total=0;
                  $jumlah=0;
                  ?>
                @if ($jadwal ->count() > 0)
                  @foreach ($jadwal as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->id_transaksibaru}}</td>
                      <td>{{$k->sopir->nama ?? "Tidak ada sopir"}}</td>
                      <td>{{$k->tanggal_pengambilan}}</td>
                      <td>{{$k->berat}}</td>
                      <td>Rp{{$k->harga}},00</td>
                      <td>Rp{{$k->jumlah = $k->berat * $k->harga}},00</td>
                      <td>{{$k->konfirmasi}}</td>
                      <?php $total += $k->jumlah; ?>
                      <td><div class="pr-1">
                        <a href="{{url('/jadwalnasabah/'. $k->id)}}"class="btn btn-sm btn-primary"><i class="fas fa fa-info-circle"></i></a>
                    </div></td>
                    </tr>
                  @endforeach
                  <td colspan="6"><b>Total</b></td>
                    <td><b>Rp {{$total}},00</b></td>
                    <td></td>
                    <td></td>
                @else
                  <tr>
                    <td colspan="6" class="text-center">Data tidak ada</td>
                          </tr>
                        @endif
                      </tbody>
                    </table>
                    <div class="container-fluid">
                      <ul class="nav nav-tabs justify-content-end">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#saldo">Saldo</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#transaksi">Transaksi</a>
                        </li>
                        <!-- Add more tab links as needed -->
                      </ul>
                    
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="saldo">
                          <div class="row">
                            <div class="col-lg-12 col-2">
                              <div class="small-box bg-success">
                                <div class="inner text-center">
                                  <p style="font-weight: bold; text-decoration: underline">{{$nasabah->nama}}</p>
                                  <h5><b>Rp {{$total}},00</b></h5>
                                  <p>Saldo Nasabah</p>
                                </div>
                                <div class="icon">
                                  <i class="fas fa-money-bill-alt fa-6x"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                        <div class="tab-pane fade" id="transaksi">
                          <!-- Content for the 'Transaksi' tab -->
                          <!-- Add your transaction details here -->
                        </div>
                        <!-- Add more tab panes as needed -->
                      </div>
                    </div>
                        </section>
                     @endsection