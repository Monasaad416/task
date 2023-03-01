<!DOCTYPE html>
<html lang="en" dir="rtl">

@include('admin.layout.head')

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="{{url ('admin/dist/img/AdminLTELogo.png')}} ')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    @include('admin.layout.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    @include('admin.layout.sidebar')
    <!-- Content Wrapper. Contains page content -->

    <!-- /.content-wrapper -->
    @yield('content')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    @include('admin.layout.footer')
  </div>
  <!-- ./wrapper -->

    @include('admin.layout.footer_scripts')
</body>

</html>
