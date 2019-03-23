<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Bootstrap core CSS-->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin.css" rel="stylesheet">
  <link href="/css/siangsa.css" rel="stylesheet">
</head>

<body id="page-top">



  <nav class="navbar navbar-expand static-top">

    <a class="navbar-brand mr-1" href="home"><img src="/img/Logo.png" style="height: 3rem;"></a>    
    <h1 class="order-1 order-sm-0 mt-3">Menu</h1>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto mr-4">
      <li class="nav-item dropdown no-arrow">
        <a class="btn btn-warning round" 
        href="{{ route('logout') }}" 
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <img src="/img/icon/Keluar.png" style="height: 1.2rem; margin-right: 10px"> 
        Keluar
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </ul>

</nav>



<div id="wrapper">

  <!-- Sidebar -->
  <ul class="sidebar navbar-nav">
    <li class="nav-item">
      <div class="text-center">
        <a href="/profile/{{ Auth::user()->id }}"><img src="/img/ava.jpg" style="width: 8rem; border-radius: 50%; padding: 1rem 0"></a>
        <h5>{{ Auth::user()->name }}</h5>
        <small>{{ Auth::user()->user_id }}</small>
        <hr style="background-color: white; width: 80%">
      </div>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/home">
        <i><img src="/img/icon/Beranda.png" style="height: 16px; width: 16px"></i>
        <span>Beranda</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/langganan">
        <i><img src="/img/icon/Langganan.png" style="height: 16px; width: 16px"></i>
        <span>Langganan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/lapor">
        <i><img src="/img/icon/Lapor.png" style="height: 16px; width: 16px"></i>
        <span>Lapor</span>
      </a>
      <li class="nav-item">
        <a class="nav-link" href="/info">
          <i><img src="/img/icon/Info.png" style="height: 16px; width: 16px"></i>
          <span>Info</span>
        </a>
      </li>
    </li>
  </ul>

  <div id="content-wrapper" class="box-shadows">

    <div class="container-fluid">

      @yield('content')

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
   {{--  <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright © Your Website 2018</span>
        </div>
      </div>
    </footer> --}}

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/js/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin.min.js"></script>

</body>

</html>
