@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Sopir </h3>
            <br>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ $url_form }}">
            @csrf
            {!!(isset($spr))? method_field('PUT') : '' !!}

            <div class="form-group">
              <label>Id Sopir</label>
              <input class="form-control @error('id_sopir') is-invalid @enderror" value="{{ isset($spr)? $spr->id_sopir : old('id_sopir') }}" name="id_sopir" type="text" />
              @error('id_sopir')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($spr)? $spr->nama :old('nama') }}" name="nama" type="text"/>
              @error('nama')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control @error('alamat') is-invalid @enderror" value="{{ isset($spr)? $spr->alamat :old('alamat') }}" name="alamat" type="text"/>
                @error('alamat')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
            </div>

            <div class="form-group">
                <label>Nomor HP</label>
                <input class="form-control @error('phone') is-invalid @enderror" value="{{ isset($spr)? $spr->phone :old('phone') }}" name="phone" type="text"/>
                @error('phone')
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