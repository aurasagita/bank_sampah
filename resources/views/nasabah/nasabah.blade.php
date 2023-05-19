@extends ('layouts.template')

@section('content')

<section class="content">
    <div >
        {{Breadcrumbs::render('nasabah')}}
      </div>
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
           <h3 class="card-title"><b>Daftar Nasabah</b></h3>
          </div>
          <div class="card-body">
            <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
              <a href="{{url('nasabah/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
              <form action="" method="GET" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" name="search" type="search" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
            {{-- @if ($nasabah->count())
                <h1>Hasil Pencarian untuk "{{ $query }}"</h1>
                <ul>
                @foreach ($nasabah as $post)
                    <li>
                        <a href="{{ route('nasabah', $post->id) }}">
                            {{ $post->id_nasabah }}
                            {{ $post->nama }}
                            {{ $post->alamat }}
                            {{ $post->phone }}
                        </a>
                    </li>
                @endforeach
                </ul>
            @else
                <p>Tidak ada hasil pencarian untuk "{{ $query }}".</p>
            @endif --}}
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id Nasabah</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th style="width: 150px">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if($nasabah->count() > 0)
                        @foreach($nasabah as $i => $m)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$m->id_nasabah}}</td>
                                <td>{{$m->nama}}</td>
                                <td>{{$m->alamat}}</td>
                                <td>{{$m->phone}}</td>
                                <td>
                                    <a href="{{url('/nasabah/'. $m->id.'/edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
            
                                    <form  class="d-inline-block " method="POST" action="{{url('/nasabah/'.$m->id)}}" onsubmit="return confirm('Yakin hapus data?')">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-solid fa-trash"></i></i></button>
                                    </form>
                                    <a href="{{url('/nasabah/'. $m->id)}}"class="btn btn-sm btn-primary"><i class="fas fa fa-info-circle"></i></a>
                                  </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{$nasabah->links()}}
        </div>
    </div>
</section>
@endsection