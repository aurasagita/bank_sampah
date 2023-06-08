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
            <form method="POST" action="{{$url_form}}">
                @csrf
                {!! (isset($jdw))? method_field('PUT'):''!!}
                <div class="form-group">
                  <label>Id Jadwal</label>
                  <input class="form-control @error('id_transaksibaru') is-invalid @enderror" value="{{isset($jdw)? $jdw->id_transaksibaru : old('id_transaksibaru') }}" name="id_transaksibaru" type="text" />
                  @error('id_transaksibaru')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="Id Nasabah">Id Nasabah</label>
                  <select name="id_nasabah" class="form-control @error('id_nasabah')
                    is-invalid @enderror">
                    @foreach($nasabah as $nsb)
                    <option value="{{$nsb->id}}">{{$nsb->id_nasabah}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="Id Sopir">Id Sopir</label>
                  <select name="id_sopir" class="form-control @error('id_sopir')
                    is-invalid @enderror">
                    @foreach($sopir as $spr)
                    <option value="{{$spr->id}}">{{$spr->id_sopir}}</option>
                    @endforeach
                  </select>
                </div>

                <!--<div class="form-group">
                  <label>Id Nasabah</label>
                  <input class="form-control @error('id_nasabah') is-invalid @enderror" value="{{isset($jdw)? $jdw->id_nasabah : old('id_nasabah') }}" name="id_nasabah" type="text"/>
                  @error('id_nasabah')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label>Id Sopir</label>
                  <input class="form-control @error('id_sopir') is-invalid @enderror" value="{{isset($jdw)? $jdw->id_sopir : old('id_sopir') }}" name="id_sopir" type="text"/>
                  @error('id_sopir')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                -->
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

                <div id="tambahData">
                  <div class="form-group">
                    <label for="Jenis Sampah">Jenis Sampah</label>
                    <select name="jenis_sampah_0" class="form-control @error('jenis_sampah') is-invalid @enderror">
                      @foreach($sampah as $s)
                      <option value="{{$s->id}}">{{$s->jenis_sampah}} ({{($s->harga)}}/kg)</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Berat</label>
                    <input class="form-control @error('berat') is-invalid @enderror" name="berat_0" type="text"/>
                    @error('berat')
                      <span class="error invalid-feedback">{{ $message }} </span>
                    @enderror
                  </div>
                </div>

                <a class="btn btn-success" onclick="tambahData()">Tambah</a>

                <div class="form-group mt-3">
                    <input type="hidden" value="1" id="counter" name="counter">
                    <button class="btn btn-sm btn-success">Simpan</button>
                  </div>
              </form>
      
        </div>
    </div>
</section>
<script>
  var counter = 1; // Menambahkan variabel counter

  function tambahData() {
    var tempHtml = `
    <div class="form-group">
      <label for="Jenis Sampah">Jenis Sampah</label>
      <select name="jenis_sampah_${counter}" class="form-control @error('jenis_sampah') is-invalid @enderror">
        @foreach($sampah as $s)
        <option value="{{$s->id}}">{{$s->jenis_sampah}} ({{($s->harga)}}/kg)</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label>Berat</label>
      <input class="form-control @error('berat') is-invalid @enderror" name="berat_${counter}" type="text"/>
    </div>`;

    $('#tambahData').append(tempHtml);
    counter++; // Meningkatkan counter setelah menambahkan elemen

    $('#counter').val(counter); // Mengisi nilai pada input counter
  }
</script>

@endsection