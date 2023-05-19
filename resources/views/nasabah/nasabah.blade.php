@extends ('layouts.template')

@section('content')

<section class="content">
    <div >
        {{Breadcrumbs::render('nasabah')}}
      </div>
    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Nasabah </h3>
            <br>
        </div>
        <div class="card-body">
            <a href="{{url('/nasabah/create')}}" class="btn btn-sm btn-success my-2">
                Tambah Data
            </a>
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
                    @if($nsb->count() > 0)
                        @foreach($nsb as $i => $m)
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
        </div>
    </div>
</section>
@endsection