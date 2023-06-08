@extends ('layouts.template')

@section('content')

<section class="content">
    <div >
        {{Breadcrumbs::render('sopir')}}
      </div>
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
           <h3 class="card-title"><b>Daftar Sopir</b></h3>
          </div>
          <div class="card-body">
            <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
              <a href="{{url('sopir/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
              <form class="form" method="get" action="{{ url('sopir') }}" class="col-md-4" style="padding: 0">
                <div class="form-group w-100 mb-3">
                    <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                </div>
              </form>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id Sopir</th>
                        <th>Nama</th>
                        {{-- <th>Foto</th> --}}
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if($sopir->count() > 0)
                        @foreach($sopir as $i => $m)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$m->id_sopir}}</td>
                                <td>{{$m->nama}}</td>
                                {{-- <td>
                                    <img src="{{asset('storage/sopirprofile/'.$m->foto)}}" alt="" width="80px">
                                </td> --}}
                                <td>{{$m->alamat}}</td>
                                <td>{{$m->phone}}</td>
                                <td>
                                    <div class="action_button" style="display : flex;">
                                        <div class="pr-1">
                                            <a href="{{url('/sopir/'. $m->id.'/edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="pr-1">
                                            <form class="delete d-inline-block " method="POST" action="{{url('/sopir/'.$m->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger ms-5"><i class="fas fa-solid fa-trash"></i></button>
                                            </form>
                                        </div>
                                        <div class="pr-1">
                                            <a href="{{url('/sopir/'. $m->id)}}"class="btn btn-sm btn-primary"><i class="fas fa fa-info-circle"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="text-center">Data tidak ada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{$sopir->links()}}
        </div>
    </div>
</section>

@push('js')
<script>
    $('.delete').submit(function () {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Setelah dihapus, Anda tidak dapat memulihkan Data ini lagi!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#198754',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        })
        return false;
    });
</script>
@endpush

@endsection