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

<body class="ms-body ms-primary-theme">

  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>

  <!-- Main Content -->
  <main class="body-content ms-error-404">

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <i class="flaticon-computer"></i>
      <h1>Error 404</h1>
      <h3>Oops! Page Not Found!</h3>
      <p>The link you followed may be broken, or the page has been removed</p>
      <a href="{{ url('/dashboard') }}" class="btn btn-white"> <i class="material-icons">arrow_back</i> Back Home</a>

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
