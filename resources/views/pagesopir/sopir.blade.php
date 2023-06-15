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
                          @if ($k->konfirmasi != 'Selesai' && $k->konfirmasi != 'Dibatalkan')
                          <a href="{{url('/jadwalsopir/'. $k->id.'/edit')}}" class="edit btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
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

@foreach ($jadwalUser as $jadwal)
<!-- Modal Detail-->
<div class="modal fade" id="detailModalSopir{{$jadwal->id}}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{$jadwal->id}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel {{$jadwal->id}}">Detail Jadwal Id
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
                  <b>Nama Nasabah</b>
                  <span>
                    {{ $jadwal->nasabah->nama }}
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
                  <b>Alamat Pengambilan</b>
                  <span>
                    {{ $jadwal->nasabah->alamat }}
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
                  <b>Harga</b>
                  <span>
                    Rp{{ $jadwal->harga }},00
                  </span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <b>Konfirmasi</b>
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