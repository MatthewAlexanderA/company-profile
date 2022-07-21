<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $config[0]->title }}</title>

  <link rel="shortcut icon" href={{{ asset('storage/' . $config[0]->image) }}}>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/admin/dist/css/adminlte.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/67b6ece322.js" crossorigin="anonymous"></script>

<!-- Trix Editor -->
<link rel="stylesheet" type="text/css" href="/css/trix.css">
<link rel="stylesheet" type="text/css" href="/css/nicepage.css">
<link rel="stylesheet" type="text/css" href="/css/Home.css">
<script type="text/javascript" src="/js/trix.js"></script>
<script type="text/javascript" src="/js/nicepage.js"></script>
<script type="text/javascript" src="/js/jquery.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>
<body class="hold-transition layout-top-nav" id="home">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-black" style="position: sticky; top: 0;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('storage/' . $config[0]->image) }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
            <strong>{{ $config[0]->title }}</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link @yield('home')" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('about')" href="/abouts">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('service')" href="/services">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('gallery')" href="/galleries">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('testimonial')" href="/testimonials">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('blog')" href="/blogs">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('contact')" href="/contacts">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>
  <!-- /.navbar -->

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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer bg-dark">
    <div class="row g-4">
      <div class="col-md-6">
        <img src="{{ asset('storage/' . $config[0]->footer_img) }}" alt="No Image" width="250" height="100" style="margin-top: 50px; margin-left: 20px;"> <br> <br>
        {{ $config[0]->footer_content }}
      </div>
      <div class="col-md-3">
        <h3>Fast Access</h3>
        <ul>
          <li>
            <a class="nav-link" href="/" style="color: white">Home</a>
          </li>
          <li>
            <a class="nav-link" href="/abouts" style="color: white">About Us</a>
          </li>
          <li>
            <a class="nav-link" href="/services" style="color: white">Service</a>
          </li>
          <li>
            <a class="nav-link" href="/galleries" style="color: white">Gallery</a>
          </li>
          <li>
            <a class="nav-link" href="/testimonials" style="color: white">Testimonial</a>
          </li>
          <li>
            <a class="nav-link" href="/blog" style="color: white">Blog</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>Address</h3>
        <p>{{ $contact[0]->alamat }}</p>
        <p><i class="fa-solid fa-phone"></i> {{ $contact[0]->telp }}</p>
        <p><i class="fa-solid fa-envelope"></i> {{ $contact[0]->email }}</p>
      </div>
    </div>
  </footer>
  <footer class="main-footer bg-black">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        <b>{{ $config[0]->title }}</b>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ date('Y') }} {{ $config[0]->title }}.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<div class="btn-floating fixed-bottom ms-3" style="bottom: 110px; left: 1258px;">
    <a href="#home">
        <button class="btn-floating" style="border-radius:100px; background-color:rgb(12, 15, 53); width:50px; height:50px;">
          <i class="fa-solid fa-angle-up"></i>
        </button>
    </a>
</div>
<div class="btn-floating fixed-bottom ms-3" style="bottom: 50px; left: 1258px;">
    <a href="https://wa.me/{{ $config[0]->wa }}" target="_blank">
        <button class="btn-floating" style="border-radius:100px; background-color:rgb(80, 231, 80); width:50px; height:50px;">
            <i class="fa-brands fa-whatsapp" style="color: black;"></i>
        </button>
    </a>
</div>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/admin/dist/js/adminlte.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="../assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="../assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>

<!-- Ekko Lightbox -->
<script src="../assets/admin/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Filterizr-->
<script src="../assets/admin/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

</body>
</html>
