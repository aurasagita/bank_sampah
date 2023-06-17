@extends('layouts.template')
@section('content')
<section class="content">
  <div >
    {{Breadcrumbs::render('jadwal')}}
  </div>
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
           <h3 class="card-title"><b>Daftar Jadwal</b></h3>
          </div>
          <div class="card-body">
            <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
              <a href="{{url('jadwal/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>

            </div>
            <table class="table table-bordered table-striped " id="data_jadwal">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Id Jadwal</th>
                  <th>Nama Nasabah</th>
                  <th>Nama Sopir</th>
                  <th>Tanggal Ambil</th>
                  <th>Konfirmasi</th>
                  <th>Action</th>
                </tr>
              </thead>

            </table>

          </div>
        </div>
    </div>
</section>
    
@push('js')
<script>
    $('.delete').submit(function () {
        Swal.fire({
            title: 'Apakah anda yakin akan membatalkan?',
            text: "Setelah dibatalkan, Anda tidak dapat memulihkan Data ini lagi!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#198754',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Pembatalan',
            cancelButtonText: 'Batal'
        }).then((result) => {
          var form = $('<form>').attr({
                            action: "{{url('jadwal')}}/" + id,
                            method: 'POST',
                            class: 'delete-form'
                        }).append('@csrf', '@method("DELETE")');
                        form.appendTo('body').submit();
        })

    });
    $(document).ready(function (){
      var data = $('#data_jadwal').DataTable();
      data.destroy();
        var data = $('#data_jadwal').DataTable({
            processing:true,
            serverside:true,
            ajax:{
                'url': '{{  url('jadwal/data') }}',
                'dataType': 'json',
                'type': 'POST',
            },
            columns:[
            {data:'no',searchable:false,sortable:true},
            {data:'id_jadwal',name:'id_jadwal',searchable:true,sortable:false},
            {data:'id_nasabah',name:'id_nasabah',searchable:true,sotable:false},
            {data:'id_sopir',name:'id_nasabah',searchable:true,sortable:false},
            {data:'tanggal_pengambilan',name:'tanggal_pengambilan',searchable:true,sortable:false},
            {data:'konfirmasi',name:'konfirmasi',searchable:true,sortable:false},
            {data:'id',name:'id',searchable:false,sortable:false,
                render: function(data, type, row, meta){
                  return '<a href="{{url('jadwal')}}/' + data + '/edit" class="btn btn-warning btn-sm mr-1"><i class="fa fa-edit"></i> </a>' +
                                '<button class="btn btn-danger btn-sm btn-delete" data-id="' + data + '"><i class="fa fa-trash"></i> </button>';
                    }
                }
        ]
        }); 
    });
</script>
@endpush

@endsection