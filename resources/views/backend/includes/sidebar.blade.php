<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('4m3i/')}}" class="brand-link">
      <img src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MALDEN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('4m3i/')}}" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('4m3i/')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Ana Sayfa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('4m3i/services')}}" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Servisler
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('4m3i/about')}}" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Hakkımızda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('4m3i/link')}}" class="nav-link">
              <i class="nav-icon fas fa-globe-europe"></i>
              <p>
                Bağlantılar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('4m3i/contact')}}" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                İletişim
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
