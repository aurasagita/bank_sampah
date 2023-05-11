@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Sampah</h3>
            <br>
        </div>
        <div class="card-body">
            <form method="POST" action="{{$url_form }}">
                @csrf
                {!! (isset($sampah))? method_field('PUT'):''!!}
                
                <div class="form-group">
                  <label>Jenis Sampah</label>
                  <input class="form-control @error('jenis_sampah') is-invalid @enderror" value="{{isset($sampah)? $sampah->jenis_sampah : old('jenis_sampah') }}" name="jenis_sampah" type="text"/>
                  @error('jenis_sampah')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input class="form-control @error('harga') is-invalid @enderror" value="{{isset($sampah)? $sampah->harga : old('harga') }}" name="harga" type="text"/>
                  @error('harga')
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