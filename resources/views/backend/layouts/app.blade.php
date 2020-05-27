@include('backend.includes.head')
    @include('backend.includes.navbar')
    @include('backend.includes.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                @yield('header-title')
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                    @yield('content')
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
  @include('sweetalert::alert')
@include('backend.includes.footer')
    