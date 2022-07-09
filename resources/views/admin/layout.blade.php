<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company Profile | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/67b6ece322.js" crossorigin="anonymous"></script>

<!-- Trix Editor -->
<link rel="stylesheet" type="text/css" href="/css/trix.css">
<script type="text/javascript" src="/js/trix.js"></script>

<style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
    }
</style>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <div class="ml-3"><b>@yield('title')</b></div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <form action="/logout" method="post">
            @csrf
            <button style="border: 0; background-color: white;" type="submit" class="nav-link active" aria-current="page">Logout</button>
        </form>
    </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info" style="color: white;">
          {{ auth()->user()->username }}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link @yield('dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('edit')">
                <i class="nav-icon fas fa-edit"></i>
              <p>
                Edit
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="about" class="nav-link @yield('about')">
                    <i class="fa-solid fa-address-card"></i>
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="why" class="nav-link @yield('why')">
                    <i class="fa-solid fa-circle-question"></i>
                  <p>Why Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="contact" class="nav-link @yield('contact')">
                    <i class="fa-solid fa-envelope"></i>
                  <p>Contact Us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('menu')">
                <i class="nav-icon fas fa-table"></i>
              <p>
                Menus
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/slider" class="nav-link @yield('slider')">
                        <i class="fa-solid fa-sliders"></i>
                      <p>Sliders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/service" class="nav-link @yield('service')">
                        <i class="fa-solid fa-bell-concierge"></i>
                      <p>Services</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/gallery" class="nav-link @yield('gallery')">
                        <i class="fa-solid fa-image"></i>
                      <p>Galleries</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/testimonial" class="nav-link @yield('testimonial')">
                        <i class="fa-solid fa-comment"></i>
                      <p>Testimonials</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/blog" class="nav-link @yield('blog')">
                        <i class="fa-solid fa-file"></i>
                      <p>Blogs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/category" class="nav-link @yield('category')">
                      <i class="fa-solid fa-quote-left"></i>
                      <p>Categories</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="config" class="nav-link @yield('config')">
              <i class="nav-icon fas fa-gear"></i>
              <p>
                Configuration
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="form" class="nav-link @yield('form')">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Form
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div id="content">
        <br>
        <div class="container">
            <section class="content">
                @yield('content')
            </section>
        </div>
    </div>

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Company</b>Profile
    </div>
    <strong>Copyright &copy; {{ date('Y') }} CompanyProfile.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/admin/dist/js/adminlte.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
  </script>

</body>
</html>
