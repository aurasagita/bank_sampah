<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item active">
            <a href="{{url('/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/nasabah')}}" class="nav-link {{request()->is('nasabah')?'active' : ''}}">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Nasabah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/sopir')}}" class="nav-link {{request()->is('sopir')?'active' : ''}}">
              <i class="nav-icon fa fa-id-card"></i>
              <p>
                Sopir
              </p>
            </a>
          </li>
          <li class="nav-item">
            
            <a href="{{url('/sampah')}}" class="nav-link {{request()->is('sampah')?'active' : ''}}">
              <i class="nav-icon fa fa-trash"></i>
              <p>
                Sampah
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{url('/jadwal')}}" class="nav-link {{request()->is('jadwal')?'active' : ''}}">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Jadwal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/laporan')}}" class="nav-link {{request()->is('laporan')?'active' : ''}}">
              <i class="nav-icon fa fa-sticky-note"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>