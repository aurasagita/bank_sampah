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
                      @else
                          <img src="#" class="elevation-2 img-fluid img-thumbnail rounded-circle" width="40px" alt="User Image">
                      @endif
                  </div>
              </div>
              <div class="dropdown-menu dropdown-menu-right fade" style="min-width: 0; border: none; padding: 0;">
                  <a class="dropdown-item btn btn-success" data-toggle="modal" data-target="#detailModal">
                      <i class="fas fa-info-circle mr-2"></i> Detail
                  </a>
                  @if (Auth::user()->role == "admin")
                  <a class="dropdown-item btn btn-success" data-toggle="modal" data-target="" style="pointer-events: none; cursor: default; opacity: 0.5;">
                      <i class="fas fa-edit mr-2"></i> Edit
                  </a>                    
                  @elseif (Auth::user()->role == "nasabah")
                  <a class="dropdown-item btn btn-success" data-toggle="modal" data-target="#editModal-{{ $nasabah->id }}">
                      <i class="fas fa-edit mr-2"></i> Edit
                  </a>
                  @else
                  <a class="dropdown-item btn btn-success" data-toggle="modal" data-target="#editModal-{{ $sopir->id }}">
                      <i class="fas fa-edit mr-2"></i> Edit
                  </a>
                  @endif
                  <a class="dropdown-item btn btn-warning" href="{{ url('/logout') }}">
                      <i class="fas fa-sign-out-alt mr-2"></i> Logout
                  </a>
              </div>              
          </div>
      </li>
  </ul>
  </nav>
  
  <!-- Modal -->
  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail
                    {{ auth()->user()->name }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <div class="image-preview">
                        @if (Auth::user()->role == "admin")
                            <img src="assets/dist/img/profile.png" class="img-thumbnail rounded-circle" width="100px" alt="User Image">
                        @else
                            <img src="#" class="img-thumbnail rounded-circle" width="100px" alt="User Image">
                        @endif
                    </div>
                </div>
                <p class="text-muted text-center mb-4">
                    @php
                        $userLevels = [
                            0 => 'admin',
                            1 => 'nasabah',
                            2 => 'sopir',
                        ];
                    @endphp
                    {{ $userLevels[Auth::user()->role] ?? 'admin' }}
                </p>
                @php
                    
                @endphp
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
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-times"></i></button>            </div>
        </div>
    </div>
</div>
