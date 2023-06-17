@extends('layouts.sidebar_sopir')
@section('content')
<section class="content">
 
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between"><h3 class="card-title"><b>Daftar Jadwal Sopir</b></h3></div>
            <br><table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Id Jadwal</th>
                  <th>Nama Nasabah</th>
                  <th>Tanggal Ambil</th>
                  <th>Alamat Pengambilan</th>
                  <th>Konfirmasi</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if ($transaksi ->count() > 0)
                  @foreach ($transaksi as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->id_jadwal}}</td>
                      <td>{{$k->nasabah->nama}}</td>
                      <td>{{$k->tanggal_pengambilan}}</td>
                      <td>{{$k->nasabah->alamat}}</td>
                      <td>{{$k->konfirmasi}}</td>
                     <td>
                        <div class="pr-1">
                        <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailModalSopir{{$k->id}}"><i class="fas fa fa-info-circle"></i></a>
                          @if($k->konfirmasi == 'Menunggu Pick Up')
                            <form class="update d-inline-block" method="POST" action="{{url('/jadwalsopir/'.$k->id)}}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-sm btn-success">
                                <i class="fa fa-check" aria-hidden="true"></i>
                              </button>
                            </form>
                          @endif
                        </div>
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
          </div>
        </div>
</section>

@foreach ($transaksi as $jadwal)
<!-- Modal Detail-->
<div class="modal fade" id="detailModalSopir{{$jadwal->id}}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{$jadwal->id}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel {{$jadwal->id}}">Detail Jadwal
                <b>{{ $jadwal->id_jadwal }}</b>
              </h5>
          </div>
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                  @if($jadwal->konfirmasi == 'Dibatalkan')
                      <li class="small-box bg-danger inner text-center" style="padding : 10px"><b>DIBATALKAN</li>
                  @elseif($jadwal->konfirmasi == 'Selesai')
                      <li class="small-box bg-success inner text-center" style="padding : 10px"><b>SELESAI</li>
                  @else
                      <li class="small-box bg-warning inner text-center" style="padding : 10px"><b>{{$jadwal->konfirmasi}}</li>
                  @endif
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
                  <b>Nama Nasabah</b>
                  <span>
                    {{ $jadwal->nasabah->nama }}
                  </span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <b>Alamat Pengambilan</b>
                  <span>
                    {{ $jadwal->nasabah->alamat }}
                  </span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="align-items-center">
                  <b>DAFTAR SETORAN SAMPAH</b><br>
                        <table class="table table-bordered">
                            <?php
                                $total = 0;
                                $no = 1;
                            ?>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jenis Sampah</th>
                                <th>Berat</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwalUser as $k => $i)
                              @if($i->id_transaksibaru == $jadwal->id_jadwal)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$i->sampah->jenis_sampah}}</td>
                                    <td>{{$i->berat}}</td> 
                                    <td>{{$i->harga}}</td> <?php $total += $i->harga; ?>
                                </tr>
                              @else
                                <?
                                  continue;
                                ?>
                              @endif
                            @endforeach
                          
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"> Total </td>
                                <td><b>{{$total}}</b></td>
                            </tr>
                        </tfoot>
                        </table>
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

@push('js')
<script>
    $('.edit').submit(function () {
      Swal.fire({
      icon: 'success',
      title: 'Status Berhasil Diubah',
      showConfirmButton: false,
      timer: 1500 
      })
    });
</script>
@endpush

@endsection