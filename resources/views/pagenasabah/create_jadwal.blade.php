@extends ('layouts.sidebar_sopir')

@section('content')
<section class="content">
  <div >
    {{Breadcrumbs::render('jadwal')}}
  </div>
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
                  <input class="form-control @error('id_nasabah') is-invalid @enderror" placeholder="{{$nasabah->id_nasabah}}" type="text" readonly>
                  <input class="form-control @error('id_nasabah') is-invalid @enderror" value="{{Auth::user()->nasabah->id}}" name="id_nasabah" type="hidden">
                  @error('id_nasabah')
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
                    <button class="btn btn-sm btn-primary">Simpan</button>
                </div>
              </form>
      
        </div>
    </div>
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
</section>

@endsection