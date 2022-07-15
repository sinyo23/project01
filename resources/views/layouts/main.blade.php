<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      @yield('header')

      <!-- .navbar -->
      @include('partials.navbar')
      <!-- End navbar -->
      
      <!-- Sosial Media -->
      @include('partials.sosmed')
      <!-- End Sosial Media -->
      
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    @include('partials.about')
    <!-- End About Me -->

    <!-- ======= Counts ======= -->
    @include('partials.counts')
    <!-- End Counts -->

    <!-- ======= Skills  ======= -->
    @include('partials.skills')
    <!-- End Skills -->

    <!-- ======= Interests ======= -->
    @include('partials.interests')
    <!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    @include('partials.testimonials')
    <!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  @include('partials.service')
  <!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  @include('partials.portfolio')
  <!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  @include('partials.contact')
  <!-- End Contact Section -->

<!-- Footer -->
  @include('partials.footer')

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>