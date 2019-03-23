<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

  <!-- Libs CSS -->
  @yield('css_before')
  <link rel="stylesheet" href="/fonts/feather/feather.min.css">
  <link rel="stylesheet" href="/libs/highlight.js/styles/vs2015.css">
  <link rel="stylesheet" href="/libs/quill/dist/quill.core.css">
  <link rel="stylesheet" href="/libs/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="/libs/flatpickr/dist/flatpickr.min.css">

  <!-- Theme CSS -->

  <link rel="stylesheet" href="/css/theme.min.css" id="stylesheetLight">

  <link rel="stylesheet" href="/css/theme-dark.min.css" id="stylesheetDark">
  <style type="text/css">
  
  .navbar-vertical.navbar-expand-md .navbar-nav .nav-link.active:before {
    top: .5rem;
    bottom: .5rem;
    left: 0;
    right: auto;
    border-left: 2px solid #fa7600;
    border-bottom: 0;
  }
  .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
    color: #fa7600;
  }
</style>
@yield('css_after')
<style>body { display: none; }</style>

<link rel="icon" href="/img/logo.ico">
<title>Siangsa Admin</title>
</head>
<body>

    <!-- NAVIGATION
      ================================================== -->

      <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="index.html">
            <img src="/img/Logo.png" class="navbar-brand-img 
            mx-auto" alt="...">
          </a>

          <!-- User (xs) -->
          <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

              <!-- Toggle -->
              <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                <a href="/profile/{{ Auth::user()->id }}" class="dropdown-item">Profile</a>
                <hr class="dropdown-divider">
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link{{ request()->is('adminhome') ? ' active' : '' }}" href="/adminhome">
                  <i class="fe fe-home"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarUsers" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                  <i class="fe fe-home"></i> Siangsa User
                </a>
                <div class="collapse{{ request()->is('adminlistuser/*') ? ' show' : '' }}" id="sidebarUsers">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="/adminlistuser/users" class="nav-link{{ request()->is('adminlistuser/users') ? ' active' : '' }}">
                        User Aktif
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/adminlistuser/new" class="nav-link {{ request()->is('adminlistuser/new') ? ' active' : '' }}">
                        User Baru <span class="badge badge-soft-success ml-auto">New</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarTagihans" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                  <i class="fe fe-home"></i> Tagihan
                </a>
                <div class="collapse" id="sidebarTagihans">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="/tagihan" class="nav-link">
                        Tagihan Aktif
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/tunggakan" class="nav-link ">
                        Tunggakan <span class="badge badge-soft-success ml-auto">New</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/adminlaporan">
                  <i class="fe fe-phone-call"></i> Laporan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/adminblog">
                  <i class="fe fe-info"></i> Blog
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/adminuser">
                  <i class="fe fe-info"></i> User Admin
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">


            <!-- Push content down -->
            <div class="mt-auto"></div>
            

            
            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">

              <!-- Icon -->
              <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Dropup -->
              <div class="dropup">

                <!-- Toggle -->
                <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src="/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                  {{-- <a href="/profile/{{ Auth::user()->id }}" class="dropdown-item">Profile</a> --}}
                  {{-- <hr class="dropdown-divider"> --}}
                  <a href="/adminlogout" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="/adminlogout" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>

              </div>

              <!-- Icon -->
              <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                  <i class="fe fe-search"></i>
                </span>
              </a>

            </div>
            

          </div> <!-- / .navbar-collapse -->

        </div>
      </nav>

    <!-- MAIN CONTENT
      ================================================== -->
      <div class="main-content">


        <!-- HEADER -->
        <div class="header">
          <div class="container-fluid">

            <!-- Body -->
            <div class="header-body">
              <div class="row align-items-end">
                <div class="col">

                  <!-- Pretitle -->
                  <h6 class="header-pretitle">
                    Overview
                  </h6>

                  <!-- Title -->
                  <h1 class="header-title">
                    Menu Admin
                    {{-- @if ($judul)
                    {{ $judul }}
                    @else
                    Menu Admin
                    @endif --}}
                  </h1>

                </div>
              </div> <!-- / .row -->
            </div> <!-- / .header-body -->

          </div>
        </div> <!-- / .header -->

        <!-- CARDS -->
        <div class="container-fluid">
          @yield('content')
        </div> <!-- / .main-content -->
      </div>
    <!-- JAVASCRIPT
      ================================================== -->
      <!-- Libs JS -->
      <script src="/libs/jquery/dist/jquery.min.js"></script>
      <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="/libs/chart.js/dist/Chart.min.js"></script>
      <script src="/libs/highlightjs/highlight.pack.min.js"></script>
      <script src="/libs/flatpickr/dist/flatpickr.min.js"></script>
      <script src="/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
      <script src="/libs/list.js/dist/list.min.js"></script>
      <script src="/libs/quill/dist/quill.min.js"></script>
      <script src="/libs/dropzone/dist/min/dropzone.min.js"></script>
      <script src="/libs/select2/dist/js/select2.min.js"></script>
      <script src="/libs/chart.js/Chart.extension.min.js"></script>

      <!-- Theme JS -->
      <script src="/js/theme.min.js"></script>

      @yield('js_after')

    </body>
    </html>