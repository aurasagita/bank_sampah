@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Nasabah </h3>
            <br>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ $url_form }}">
            @csrf
            {!!(isset($nsb))? method_field('PUT') : '' !!}

            <div class="form-group">
              <label>Id Nasabah</label>
              <input class="form-control @error('id_nasabah') is-invalid @enderror" value="{{ isset($nsb)? $nsb->id_nasabah : old('id_nasabah') }}" name="id_nasabah" type="text" />
              @error('id_nasabah')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($nsb)? $nsb->nama :old('nama') }}" name="nama" type="text"/>
              @error('nama')
                <span class="error invalid-feedback">{{ $message }} </span>
              @enderror
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control @error('alamat') is-invalid @enderror" value="{{ isset($nsb)? $nsb->alamat :old('alamat') }}" name="alamat" type="text"/>
                @error('alamat')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
            </div>

            <div class="form-group">
                <label>Nomor HP</label>
                <input class="form-control @error('phone') is-invalid @enderror" value="{{ isset($nsb)? $nsb->phone :old('phone') }}" name="phone" type="text"/>
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