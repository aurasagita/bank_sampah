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
                  <input class="form-control @error('id_transaksibaru') is-invalid @enderror" value="{{isset($jdw)?$jdw->id_transaksibaru : old('id_transaksibaru',$jdw->id_transaksibaru) }}" name="id_transaksibaru" type="text" />
                  @error('id_transaksibaru')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="Id Nasabah">Id Nasabah</label>
                  <select disabled name="id_nasabah" class="form-control @error('id_nasabah')
                    is-invalid @enderror">
                    @foreach($nasabah as $nsb)
                    <option value="{{$nsb->id}}" {{ old('id_nasabah', $jdw->id_nasabah) == $nsb->id ? 'selected' : null }}> 
                      {{$nsb->id_nasabah}}
                    </option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="Id Sopir">Id Sopir</label>
                  <select name="id_sopir" class="form-control @error('id_sopir')
                    is-invalid @enderror">
                    @foreach($sopir as $spr)
                    <option value="{{$spr->id}}" {{ old('id_sopir', $jdw->id_sopir) == $spr->id ? 'selected' : null }}>{{$spr->id_sopir}}</option>
                    @endforeach
                  </select>
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
                  <select class="form-control @error('konfirmasi') is-invalid @enderror" value="{{isset($jdw)? $jdw->id_transaksibaru : old('id_transaksibaru', $jdw->konfirmasi) }}" name="konfirmasi" type="text">
                    <option value="Menunggu Pick Up" {{ old('kofnirmasi', $jdw->konfirmasi) == 'Menunggu Pick Up' ? 'selected' : '' }}>Menunggu Pick Up</option>
                    <option value="Pick Up" {{ old('konfirmasi', $jdw->konfirmasi) == 'Pick Up' ? 'selected' : '' }}>Pick Up</option>
                    <option value="Selesai" {{ old('konfirmasi', $jdw->konfirmasi) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                  </select>
                  
                  @error('konfirmasi')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="Jenis Sampah">Jenis Sampah</label>
                  <select name="jenis_sampah" class="form-control @error('jenis_sampah') is-invalid @enderror">
                    @foreach($sampah as $sampah)
                    <option value="{{$sampah->id}}">{{$sampah->jenis_sampah}} ({{($sampah->harga)}}/kg)</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label>Berat</label>
                  <input class="form-control @error('berat') is-invalid @enderror" value="{{isset($jdw)? $jdw->berat : old('berat') }}" name="berat" type="text"/>
                  @error('berat')
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