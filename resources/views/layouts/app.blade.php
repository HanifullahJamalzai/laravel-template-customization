<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nova Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing_assets/vendor/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
  <link href="{{ asset('landing_assets/vendor/bootstrap-icons/bootstrap-icons.css')}} " rel="stylesheet">
  <link href="{{ asset('landing_assets/vendor/aos/aos.css')}} " rel="stylesheet">
  <link href="{{ asset('landing_assets/vendor/glightbox/css/glightbox.min.css')}} " rel="stylesheet">
  <link href="{{ asset('landing_assets/vendor/swiper/swiper-bundle.min.css')}} " rel="stylesheet">
  <link href="{{ asset('landing_assets/vendor/remixicon/remixicon.css')}} " rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('landing_assets/css/main.css')}} " rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova - v1.0.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  @include('layouts.partials.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('layouts.partials.hero')
  <!-- End Hero Section -->

  <main id="main">

    @yield('contents')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.partials.footer')
  <!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('landing_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <script src="{{ asset('landing_assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('landing_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('landing_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('landing_assets/vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
  <script src="{{ asset('landing_assets/vendor/php-email-form/validate.js') }} "></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('landing_assets/js/main.js') }}"></script>

</body>

</html>