<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="shortcut icon" href="{{secure_url('assets/img/logo2.png')}}" style="width:80px;height:80px;">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
     <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
   
    <!-- Libraries Stylesheet -->
    <link href="{{secure_url('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{secure_url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{secure_url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  
  <!-- Favicons -->
    <link href="{{secure_url('assets/img/favicon.png') }}" rel="icon">
    <link href="{{secure_url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
   
    <!-- Vendor CSS Files -->
    <link href="{{secure_url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{secure_url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{secure_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{secure_url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href=" {{ secure_url('assets/css/style.css') }}" rel="stylesheet">
</head>


<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex ">
    <a href="{{route('home')}}" ><img src="{{secure_url('assets/img/logo.png')}}" alt="" class="img-fluid  me-auto" height="65px" width="65px"   id="logo1" ></a>
   <a href="{{route('home')}}" class="me-auto" style="color: white"><h1 id="heading" >NaviTalk</h1> <br> <p id="slogan">let the sightless perceive</p></a>

    <nav id="navbar" class="navbar">
      <ul>
        <li style=""><a class="nav-link scrollto active" href="{{route('home')}}" >Home</a></li>
        <li><a class="nav-link scrollto" href="{{ URL::route('home') }}#about">About</a></li>
        <li><a class="nav-link scrollto" href="{{ URL::route('home') }}#features">Features</a></li>
        <li><a class="nav-link scrollto" href="{{ URL::route('home') }}#team">Team</a></li>
        <li><a class="getstarted scrollto" href="{{route('contact')}}">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

@yield('content')



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top" style="background-color: rgb(240, 245, 255);" >
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
          <h2 id="heading2">NaviTalk</h2> <br> <p id="slogan2" style="color: #0c3c53;">let the sightless perceive</p>
           <br> <p>
             Jinnah University for Women <br>
            5C, Nazimabad, <br>
            Karachi – 74600 <br><br>
              <strong>Phone:</strong> (92-21) 36620857-59<br>
              <strong>Email:</strong> navitalkapp@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ URL::route('home') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ URL::route('home') }}#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ URL::route('home') }}#features">Feature</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ URL::route('home') }}#team">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Features</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ URL::route('home') }}#features">Object Detection</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ URL::route('home') }}#features">Indoor Navigation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ URL::route('home') }}#features">Visual Assistance</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p style="font-family:Segoe UI Semibold; color: #777777;">Connect & Review Us On</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/NavitalkApp?t=nGlsyRbjclMeVjHf_1F91w&s=08" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
              <a href="https://m.facebook.com/NaviTalk-101457775805953/?ref=bookmarks" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
              <a href="https://instagram.com/navi_talk?utm_medium=copy_link" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>NaviTalk</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      <p style="font-family:Segoe UI Semibold">Jinnah University for Women <br> Department of Computer Science & Software Engineering</p>
      </div>

    
    
    </div>
  </footer><!-- End Footer -->

<div id="preloader"></div>
         <!-- Back to Top -->
         <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


      <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 
  <script src="{{secure_url('lib/easing/easing.min.js') }}"></script>
  <script src="{{secure_url('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{secure_url('lib/counterup/counterup.min.js') }}"></script>
  <script src="{{secure_url('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    
  <!-- Vendor JS Files -->
  <script src="{{secure_url('assets/vendor/aos/aos.js') }}"></script>
 
  <script src="{{secure_url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <script src="{{secure_url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
 
  <!-- Template Main JS File -->
  <script src="{{secure_url('assets/js/main.js') }}"></script>
  <script src="{{secure_url('assets/js/animation.js') }}"></script>
  <script src="{{secure_url('assets/js/main2.js') }}"></script>
  </body>

</html>