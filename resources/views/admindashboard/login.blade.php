<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>
    

    <title>Siangsa Admin Login</title>
  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">
          
          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Login
          </h1>
          
          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            Akses admin dashboard Siangsa.
          </p>
          
          <!-- Form -->
          <form method="post" action="/session">
            {{ csrf_field() }}
            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>Email Address</label>

              <!-- Input -->
              <input type="email" class="form-control" name="email" required="required" placeholder="name@address.com">

            </div>

            <!-- Password -->
            <div class="form-group">

              <div class="row">
                <div class="col">
                      
                  <!-- Label -->
                  <label>Password</label>

                </div>
                <div class="col-auto">
                  
                  <!-- Help text -->
                  <a href="password-reset.html" class="form-text small text-muted">
                    Forgot password?
                  </a>

                </div>
              </div> <!-- / .row -->

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input type="password" class="form-control form-control-appended" name="password" required="required" placeholder="Enter your password">

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>
            </div>

            <!-- Submit -->
            <button class="btn btn-lg btn-block btn-primary mb-3">
              Login
            </button>

            <!-- Link -->
            <div class="text-center">
              <small class="text-muted text-center">
                Don't have an account yet? <a href="sign-up.html">Sign up</a>.
              </small>
            </div>
            
          </form>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

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

  </body>
</html>