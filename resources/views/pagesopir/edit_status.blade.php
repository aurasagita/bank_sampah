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
                  <label>Konfirmasi</label>
                  <select class="form-control @error('konfirmasi') is-invalid @enderror" value="{{isset($jdw)? $jdw->id_jadwal : old('id_jadwal', $jdw->konfirmasi) }}" name="konfirmasi" type="text">
                    <option value="Menunggu Pick Up" {{ old('kofnirmasi', $jdw->konfirmasi) == 'Menunggu Pick Up' ? 'selected' : '' }}>Menunggu Pick Up</option>
                    <option value="Pick Up" {{ old('konfirmasi', $jdw->konfirmasi) == 'Pick Up' ? 'selected' : '' }}>Pick Up</option>
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