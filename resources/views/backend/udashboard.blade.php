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
  <title>Siangsa</title>
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
                <a class="nav-link {{ request()->is('home') ? ' active' : '' }}" href="/home">
                  <i class="fe fe-home"></i> Beranda
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('langganan') ? ' active' : '' }}" href="/langganan">
                  <i class="fe fe-shopping-bag"></i> Status Langganan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('lapor') ? ' active' : '' }}" href="/lapor">
                  <i class="fe fe-phone-call"></i> Lapor Keluhan
                </a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link {{ request()->is('info') ? ' active' : '' }}" href="/info">
                  <i class="fe fe-info"></i> Info
                </a>
              </li> --}}
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
                  <a href="/profile/{{ Auth::user()->id }}" class="dropdown-item">Profile</a>
                  <hr class="dropdown-divider">
                  <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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


      <nav class="navbar navbar-expand-lg navbar-light" id="topnav">
        <div class="container">

          <!-- Toggler -->
          <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand mr-auto" href="index.html">
            <img src="/img/Logo.png" alt="..." class="navbar-brand-img">
          </a>

          <!-- Collapse -->
          <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
            </form>
          </div>

        </div> <!-- / .container -->
      </nav>


    <!-- MAIN CONTENT
      ================================================== -->
      <div class="main-content">


        <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
          <div class="container-fluid">

            <!-- Form -->
            <form class="form-inline mr-4 d-none d-md-flex">
              <div class="input-group input-group-flush input-group-merge" data-toggle="lists" data-lists-values='["name"]'>

                <!-- Input -->
                <input type="search" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fe fe-search"></i>
                  </div>
                </div>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-card">
                  <div class="card-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush list my-n3">
                      <a href="team-overview.html" class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Airbnb
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->
                      </a>
                      <a href="team-overview.html" class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Medium Corporation
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->
                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Homepage Redesign
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Travels & Time
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Safari Exploration
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="profile-posts.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Dianna Smiley
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                              <span class="text-success">●</span> Online
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="profile-posts.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Ab Hadley
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                              <span class="text-danger">●</span> Offline
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                    </div>

                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>
            </form>

            <!-- User -->
            <div class="navbar-user">

              <!-- Dropdown -->
              <div class="dropdown mr-4 d-none d-md-flex">

                <!-- Toggle -->
                <a href="#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="icon active">
                    <i class="fe fe-bell"></i>
                  </span>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Title -->
                        <h5 class="card-header-title">
                          Notifications
                        </h5>

                      </div>
                      <div class="col-auto">

                        <!-- Link -->
                        <a href="#!" class="small">
                          View all
                        </a>

                      </div>
                    </div> <!-- / .row -->
                  </div> <!-- / .card-header -->
                  <div class="card-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush my-n3">
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Grace Gross</strong> subscribed to you.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                    </div>

                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>

              <!-- Dropdown -->
              <div class="dropdown">

                <!-- Toggle -->
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="/profile/{{ Auth::user()->id }}" class="dropdown-item">Profile</a>
                  <a href="settings.html" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>

              </div>

            </div>

          </div>
        </nav>


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
                    @if ($judul)
                    {{ $judul }}
                    @else
                    Menu Admin
                    @endif
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