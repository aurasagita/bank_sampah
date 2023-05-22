@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Jadwal Pengambilan Sampah</h3>
            <br>
        </div>
        <div class="card-body">
            <form method="POST" action="{{$url_form }}">
                @csrf
                {!! (isset($jdw))? method_field('PUT'):''!!}

                <div class="form-group">
                  <label>Id Nasabah</label>
                  <input class="form-control @error('id_nasabah') is-invalid @enderror" readonly value="{{jdw->id_nasabah}}" name="id_nasabah" type="text"/>
                  @error('id_nasabah')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Tanggal Pengambilan</label>
                  <input class="form-control @error('tanggal_pengambilan') is-invalid @enderror" value="{{isset($jdw)? $jdw->tanggal_pengambilan : old('tanggal_pengambilan') }}" name="tanggal_pengambilan" type="date"/>
                  @error('tanggal_pengambilan')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Konfirmasi</label>
                  <select class="form-control @error('konfirmasi') is-invalid @enderror" value="{{isset($jdw)? $jdw->konfirmasi : old('konfirmasi') }}" name="konfirmasi" type="text">
                    <option value="Menunggu Pick Up">Menunggu Pick Up</option>
                    <option value="Pick Up">Pick Up</option>
                    <option value="Selesai">Selesai</option>
                  </select>
                  
                  @error('konfirmasi')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-primary">Simpan</button>
                  </div>
              </form>
      
        </div>
    </div>
</section>
@endsection