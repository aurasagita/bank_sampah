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
            <a href="{{url('/sopir/create')}}" class="btn btn-sm btn-success my-2">
                Tambah Data
            </a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id Sopir</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if($spr->count() > 0)
                        @foreach($spr as $i => $m)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$m->id_sopir}}</td>
                                <td>{{$m->nama}}</td>
                                <td>{{$m->alamat}}</td>
                                <td>{{$m->phone}}</td>
                                <td>
                                    <div class="action_button" style="display : flex;">
                                        <div class="pr-1">
                                            <a href="{{url('/sopir/'. $m->id.'/edit')}}" class="btn btn-sm btn-warning pr-1">Edit</a>
                                        </div>
                                        <div class="pr-1">
                                            <form method="POST" action="{{url('/sopir/'.$m->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger ms-5">Hapus</button>
                                            </form>
                                        </div>
                                        <div class="pr-1">
                                            <a href="{{url('/sopir/'. $m->id)}}"class="btn btn-sm btn-primary">Detail</a>
                                        </div>
                                    </div>
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