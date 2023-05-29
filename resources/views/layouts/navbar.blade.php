<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
      <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
          <div class="dropdown">
              <div class="mt-1 d-flex" role="button" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="profile rounded-circle mr-2">
                      @if (Auth::user()->role == "admin")
                          <img src="assets/dist/img/profile.png" class="" alt="User Image" width="40px">
                      @elseif(Auth::user()->role == "nasabah")
                        @if (empty($nasabah->foto))
                            <img src="assets/dist/img/profile.png" class="" alt="User Image" width="40px">
                        @else
                            <img src="{{asset('storage/nasabahprofile/'.$nasabah->foto)}}" class="elevation-2 img-fluid img-thumbnail rounded-circle" width="40px" alt="User Image">
                        @endif
                      @else
                        @if (empty($sopir->foto))
                            <img src="assets/dist/img/profile.png" class="" alt="User Image" width="40px">
                        @else
                          <img src="{{asset('storage/sopirprofile/'.$sopir->foto)}}" class="elevation-2 img-fluid img-thumbnail rounded-circle" width="40px" alt="User Image">
                        @endif
                     @endif
                  </div>
              </div>
              <div class="dropdown-menu dropdown-menu-right fade" style="min-width: 0; border: none; padding: 0;">
                  <a class="dropdown-item btn btn-success" data-toggle="modal" data-target="#detailModal">
                      <i class="fas fa-info-circle mr-2"></i> Detail
                  </a>
                  <a class="dropdown-item btn btn-success" href="{{ url('/logout') }}">
                      <i class="fas fa-sign-out-alt mr-2"></i> Logout
                  </a>
              </div>              
          </div>
      </li>
  </ul>
  </nav>
  
  <!-- Modal Detail-->
  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail
                    {{ auth()->user()->name }}
                </h5>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <div class="image-preview">
                        @if (Auth::user()->role == "admin")
                            <img src="assets/dist/img/profile.png" class="rounded-circle" width="100px" alt="User Image">
                        @elseif(Auth::user()->role == "nasabah")
                            @if (empty($nasabah->foto))
                                <img src="assets/dist/img/profile.png" class="" alt="User Image" width="100px">
                            @else
                                <img src="{{asset('storage/nasabahprofile/'.$nasabah->foto)}}" class="img-thumbnail" alt="User Image">
                            @endif
                        @else
                            @if (empty($sopir->foto))
                                <img src="assets/dist/img/profile.png" class="" alt="User Image" width="40px">
                            @else
                                <img src="{{asset('storage/sopirprofile/'.$sopir->foto)}}" class="elevation-2 img-fluid img-thumbnail rounded-circle" width="40px" alt="User Image">
                            @endif
                        @endif
                    </div>
                </div>
                @if (Auth::user()->role == "admin")
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                          <b>Nama</b>
                          <span>
                            {{ auth()->user()->name }}
                          </span>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                          <b>Email</b>
                          <span>
                            {{ auth()->user()->email }}
                          </span>
                      </div>
                  </li>
                </ul>
                @elseif (Auth::user()->role == "sopir")
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                          <b>Nama</b>
                          <span>
                            {{ $sopir->nama }}
                          </span>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                          <b>Email</b>
                          <span>
                            {{ $sopir->email }}
                          </span>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                          <b>Alamat</b>
                          <span>
                            {{ $sopir->alamat }}
                          </span>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                          <b>Nomor Handphone</b>
                          <span>
                            {{$sopir->phone}}
                          </span>
                      </div>
                  </li>
                </ul>
                @else
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                          <b>Nama</b>
                          <span>
                            {{ $nasabah->nama }}
                          </span>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                          <b>Email</b>
                          <span>
                            {{ $nasabah->email }}
                          </span>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                          <b>Alamat</b>
                          <span>
                            {{ $nasabah->alamat }}
                          </span>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                          <b>Nomor Handphone</b>
                          <span>
                            {{ $nasabah->phone }}
                          </span>
                      </div>
                  </li>
              </ul>
              @endif
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm btn-danger" data-dismiss="modal">Tutup</button>            
            </div>
        </div>
    </div>
</div>


