@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Jadwal</h3>
            <br>
        </div>
        <div class="card-body">
            <form method="POST" action="{{$url_form }}">
                @csrf
                {!! (isset($jdw))? method_field('PUT'):''!!}
                <div class="form-group">
                  <label>Id Jadwal</label>
                  <input class="form-control @error('id_jadwal') is-invalid @enderror" value="{{isset($jdw)? $jdw->id_jadwal : old('id_jadwal') }}" name="id_jadwal" type="text" />
                  @error('id_jadwal')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control @error('nama') is-invalid @enderror" value="{{isset($jdw)? $jdw->nama : old('nama') }}" name="nama" type="text"/>
                  @error('nama')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Tanggal Mulai</label>
                  <input class="form-control @error('tanggal_mulai') is-invalid @enderror" value="{{isset($jdw)? $jdw->tanggal_mulai : old('tanggal_mulai') }}" name="tanggal_mulai" type="date"/>
                  @error('tanggal_mulai')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Tanggal Akhir</label>
                  <input class="form-control @error('tanggal_akhir') is-invalid @enderror" value="{{isset($jdw)? $jdw->tanggal_akhir : old('tanggal_akhir') }}" name="tanggal_akhir" type="date"/>
                  @error('tanggal_akhir')
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