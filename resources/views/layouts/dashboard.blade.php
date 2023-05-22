@extends ('layouts.template')

@section('content')
    
    <div class="row">
        <div class="col-md-12 grid-margin">
            @if (session('message'))
                <h6 class="alert alert-success">{{ session('message')}},</h6>
            @endif
            <div class="card">
                <div class="card-header border-0">
            <div class="me-md-3 me-xl-5">
                <h6><p class="mb-md-6">Selamat Datang Admin Bank Sampah</p></h6>
            </div>
            </div>
        </div>
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <b><h1>Dashboard Bank Sampah Malang</h1></b>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div>
              </div>

                <div class="card-header border-0">
                    <!-- Main content -->
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"><i class="nav-icon fas fa-home"></i> Dashboard</h3>
                        </div>
                        <div class="card-body">
                <section class="content">

                <!-- Default box -->
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                      <div class="col-xl-3 col-md-4 mb-2">
                            <div class="card border-left-info shadow h-100 py-2 bg-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

                                            <p>Nasabah</p>
                                            <div class="h5 mb-0 font-weight-bold">{{ $hitungNasabah }} Nasabah</div>
                                            <a href="{{ url('dashboard/nasabah') }}" class="small-box-footer h5 mb-0 font-weight-bold">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                             <div class="col-auto">
                                            <i class="fas fa-users fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-xl-3 col-md-4 mb-2">
                        <div class="card border-left-info shadow h-100 py-2 bg-success">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <p>Sopir</p>
                                      <div class="h5 mb-0 font-weight-bold">{{ $hitungSopir }} Sopir</div>
                                        <a href="{{ url('/sopir') }}" class="small-box-footer h5 mb-0 font-weight-bold">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-md-4 mb-2">
                                <div class="card border-left-info shadow h-100 py-2 bg-success">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                              <p>Sampah</p>
                                              <div class="h5 mb-0 font-weight-bold">{{ $hitungSampah }} Sampah</div>
                                                <a href="{{ url('/komplain') }}" class="small-box-footer h5 mb-0 font-weight-bold">More info <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-book fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-md-4 mb-2">
                            <div class="card border-left-info shadow h-100 py-2 bg-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                          <p>Jadwal</p>
                                          <div class="h5 mb-0 font-weight-bold">{{ $hitungJadwal }} Jadwal</div>
                                            <a href="{{ url('/jadwal') }}" class="small-box-footer h5 mb-0 font-weight-bold">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bars fa-2x"></i>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <b>Data Transaksi Bank Sampah</b>
                        </div>
                        <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
                            <form class="form" method="GET" action="{{ url('transaksi') }}" class="col-md-4" style="padding: 0">
                              <div class="form-group w-100 mb-3">
                              </div>
                            </form>

                            <div class="card-body">
                             
                                <table class="table table-bordered table-striped">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Id Jadwal</th>
                                      <th>Jenis Sampah</th>
                                      <th>Berat</th>
                                      <th>Harga</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @if ($transaksi ->count() > 0)
                                      @foreach ($transaksi as $i => $k)
                                        <tr>
                                          <td>{{++$i}}</td>
                                          <td>{{$k->jadwal->id_jadwal}}</td>
                                          <td>{{$k->sampah->jenis_sampah}}</td>
                                          <td>{{$k->berat}}</td>
                                          <td>Rp{{$k->harga}},00</td>
                                          <td>
                                           
                                            <a href="{{url('/transaksi/'. $k->id)}}"class="btn btn-sm btn-primary d-inline-block">Detail</a>
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
                        </div>
            </section>
                 
                    

        @endsection