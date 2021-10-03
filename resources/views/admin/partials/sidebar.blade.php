
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a  class="brand-link">
      <img src="{{ URL::asset('assets/dist/img/gowa.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" >
      <span class="brand-text font-weight-light">Kelurahan Mawang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::asset('assets/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Info Kelurahan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL('admin/wilayah_administrasi/')}}" class="nav-link {{ (request()->routeIs('wilayah_administrasi.index')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wilayah Administrasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('pemerintahan.index')}}" class="nav-link {{ (request()->routeIs('pemerintahan.index')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemerintahan Kelurahan</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Kependudukan 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{Route('penduduk.index')}}" class="nav-link {{ (request()->routeIs('penduduk.index')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penduduk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('admin.laporan_bulanan')}}" class="nav-link {{ (request()->routeIs('admin.laporan_bulanan')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Bulanan</p>
                </a>
              </li>
             
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>