<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title')</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/flat-icons/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">
  <!-- Costic styles -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body>

  <!-- Main Content -->
  <main class="body-content">
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper ms-auth">
      <div class="ms-auth-container">
        <div class="ms-auth-col">
          <div class="ms-auth-bg"></div>
        </div>
        <div class="ms-auth-col">
          <div class="ms-auth-form">
            <form class="needs-validation" novalidate="">
              <h3>SignUp</h3>
              <p>Please enter your detail to continue</p>
              <div class="mb-3">
                <label for="validationCustom08">Email Address</label>
                <div class="input-group">
                  <input type="email" class="form-control" id="validationCustom08" placeholder="Email Address" required="">
                  <div class="invalid-feedback">Please provide a valid email.</div>
                </div>
              </div>
              <div class="mb-2">
                <label for="validationCustom09">Name</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="validationCustom09" placeholder="Name" required="">
                  <div class="invalid-feedback">Please provide a Name.</div>
                </div>
              </div>
              <div class="mb-2">
                <label for="validationCustom09">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="validationCustom09" placeholder="Password" required="">
                  <div class="invalid-feedback">Please provide a password.</div>
                </div>
              </div>
              <button class="btn btn-primary mt-4 d-block w-100" type="submit">Sign Up</button> 
              <p class="mb-0 mt-3 text-center">You already have an account? <a class="btn-link" href="{{ url('/') }}">Sign In</a> 
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Forgot Password Modal -->
    <div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
      <div class="modal-dialog modal-dialog-centered modal-min" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button> <i class="flaticon-secure-shield d-block"></i>
            <h1>Forgot Password?</h1>
            <p>Enter your email to recover your password</p>
            <form method="post">
              <div class="ms-form-group has-icon">
                <input type="text" placeholder="Email Address" class="form-control" name="forgot-password" value=""> <i class="material-icons">email</i>
              </div>
              <button type="submit" class="btn btn-primary shadow-none">Reset Password</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

<!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
  <!-- Global Required Scripts End -->
  <!-- Page Specific Scripts Start -->
  <script src="{{ asset('js/Chart.bundle.min.js') }}">
  </script>
  <script src="{{ asset('js/widgets.js') }}"> </script>
  <script src="{{ asset('js/clients.js') }}"> </script>
  <script src="{{ asset('js/Chart.Financial.js') }}"> </script>
  <script src="{{ asset('js/d3.v3.min.js') }}">
  </script>
  <script src="{{ asset('js/topojson.v1.min.js') }}">
  </script>
  <script src="{{ asset('js/datatables.min.js') }}">
  </script>
  <script src="{{ asset('js/data-tables.js') }}">
  </script>
  <!-- Page Specific Scripts Finish -->
  <!-- Costic core JavaScript -->
  <script src="{{ asset('js/framework.js') }}"></script>
  <!-- Settings -->
  <script src="{{ asset('js/settings.js') }}"></script>
</body>
<!-- Mirrored from slidesigma.com/themes/html/costic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 May 2020 07:15:13 GMT -->
</html>
