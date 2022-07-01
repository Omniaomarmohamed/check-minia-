<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Check Minia</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- <link href="img/check.png rel="icon"> -->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ URL::asset('css/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ URL::asset('css/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <!-- new passes -->
  <!-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="bootstrap-select-1.13.18/css/bootstrap-select.min.css" />
  <link rel="stylesheet" href="flag-icons-main/css/flag-icons.min.css" />
  {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
  @yield('styles') 



  <!-- Main Stylesheet File -->
  <link href="{{ URL::asset('css/css/style.css ') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body" class="text-capitalize">

    <!--==========================
      Top Bar
    ============================-->
    <section id="topbar" class="d-none d-lg-block">
      {{-- google translation --}}
      
      {{-- end google translation --}}

      <div class="container clearfix">
        <div class="contact-info float-left">
          <i class="fa fa-envelope-o"></i> <a href="noorramdan271@gmail.com">noorramdan271@gmail.com</a>
          <i class="fa fa-phone"></i> +0201122651275
          
        </div>
        <div class="social-links float-right">
          <!-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> -->
          
          @yield('nav') 
          <a href="https://www.facebook.com/omnia.omarmohamed" class="facebook"><i class="fa fa-facebook"></i></a>
          <!-- <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> -->
          <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fgithub.com%2FOmniaomarmohamed%3Ffbclid%3DIwAR1y-dUNLdk8V5DEw1gXMIx69nEtXLsKXxOYRILvr9KSq945XuClJGANFpA&h=AT2T3uFSbiJp20kBCht1mu6VP80NGBZbZiKPZUa9j-F1PMXXXzlhAnjQ3CdMBjN4iKO1w2sPms2wxFVIdCDG9e4bz6guIuWJq5fz2iGyRtpbONclI_V5RxrvRJfhnWWoR1DkKA" class="google-plus"><i class="fa fa-github"></i></a>
          <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fomnia-omar-1735511a6%3Ffbclid%3DIwAR1IFJZC0fFgQKfJTI0NZ0ozRHzorjN2bZTEQqmXD3JBq4YuuOgM9u1jqtw&h=AT2T3uFSbiJp20kBCht1mu6VP80NGBZbZiKPZUa9j-F1PMXXXzlhAnjQ3CdMBjN4iKO1w2sPms2wxFVIdCDG9e4bz6guIuWJq5fz2iGyRtpbONclI_V5RxrvRJfhnWWoR1DkKA" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </section>
  
    <!--==========================
      Header
    ============================-->
    <header id="header">
      <div class="container">
        <div id="logo" class="pull-left">
          <h1><a href="#body" class="scrollto">check<span> minya</span></a></h1>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="/">main page</a></li>
            <li><a href="about">About Us</a></li>
            <li class="menu-has-children"><a href="#categories">categories</a>
              <ul>
                <li><a href="Restaurants">Restaurants</a></li>
                <li><a href="picnic_places">picnic places</a></li>
                <li><a href="hospitals">Hospitals</a></li>
                <li><a href="Hotels">Hotels</a></li>
                <li><a href="mosques">mosques</a></li>
                <li><a href="churches">churches</a></li>
                <li><a href="schools">schools</a></li>
                <li><a href="Universities">Universities</a></li>
              </ul>
            </li>
            <li><a href="#clients">clients</a></li>
            <li><a href="#portfolio">places</a></li>
            <li><a href="services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><div class="contact-info float-left">
              </div></li>
              
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
  
       

  {{-- <select class="selectpicker btn btn-danger" data-width="fit" onchange="translateLanguage(this.value);">
    <option data-content='<span class="flag-icon flag-icon-af"></span> Afrikaans' value="Afrikaans">Afrikaans</option>
    <option  data-content='<span class="flag-icon flag-icon-al"></span> Albanian' value="Albanian">Albanian</option>
    <option  data-content='<span class="flag-icon flag-icon-ar"></span> Arabic' value="Arabic">Arabic</option>
    <option  data-content='<span class="flag-icon flag-icon-am"></span> Armenian' value="Armenian">Armenian</option>
    <option  data-content='<span class="flag-icon flag-icon-az"></span> Azerbaijani' value="Azerbaijani">Azerbaijani</option>
    ...
  </select> --}}


  {{-- end google translation --}}
    </header><!-- #header -->
    <div id="sideBar" class="clearfix ">
      <div class="color-box" >
          <h4 style="color: #081e5b;">choose your language</h4>
          <div id="google_translate_element" ></div>
      </div>
      <i id="sideBarToggle" class="fa fa-cog " style="background-color: #081e5b; color:#F76E11"></i>
  
  </div>

    @yield('body')
    
      <!--==========================
    Footer
  ============================-->
  <footer id="footer" style="background-color: #081e5b; color: #fff;" >
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong class="fw-bold fs-3 " style="color: #F76E11;">Check El Minia</strong>. All Rights Reserved
      </div>
      <div class="credits">
<!--         
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a style="color: #fff;" href="https://bootstrapmade.com/">our Team</a>
      </div>
      
    </div>
    <div class="social-links text-center" style="color: #fff !important;">
      <!-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> -->
      <a href="https://www.facebook.com/omnia.omarmohamed" class="facebook"><i class="fa fa-facebook ml-2"></i></a>
      <!-- <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> -->
      <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fgithub.com%2FOmniaomarmohamed%3Ffbclid%3DIwAR1y-dUNLdk8V5DEw1gXMIx69nEtXLsKXxOYRILvr9KSq945XuClJGANFpA&h=AT2T3uFSbiJp20kBCht1mu6VP80NGBZbZiKPZUa9j-F1PMXXXzlhAnjQ3CdMBjN4iKO1w2sPms2wxFVIdCDG9e4bz6guIuWJq5fz2iGyRtpbONclI_V5RxrvRJfhnWWoR1DkKA" class="google-plus"><i class="fa fa-github ml-2"></i></a>
      <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fomnia-omar-1735511a6%3Ffbclid%3DIwAR1IFJZC0fFgQKfJTI0NZ0ozRHzorjN2bZTEQqmXD3JBq4YuuOgM9u1jqtw&h=AT2T3uFSbiJp20kBCht1mu6VP80NGBZbZiKPZUa9j-F1PMXXXzlhAnjQ3CdMBjN4iKO1w2sPms2wxFVIdCDG9e4bz6guIuWJq5fz2iGyRtpbONclI_V5RxrvRJfhnWWoR1DkKA" class="linkedin"><i class="fa fa-linkedin ml-2"></i></a>
    </div>
    
  </footer><!-- #footer -->

  <!-- new scripts -->
  <!-- <script src="/path/to/cdn/jquery.slim.min.js"></script> -->
  <script src="{{ URL::asset('js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap-select-1.13.18/js/bootstrap-select.min.js') }}"></script>
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

  <!-- JavaScript Libraries -->
  <script src="{{ URL::asset('js/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('js/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ URL::asset('js/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('js/lib/easing/easing.min.js') }}"></script>
  <script src="{{ URL::asset('js/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ URL::asset('js/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ URL::asset('js/lib/wow/wow.min.js') }}"></script>
  <script src="{{ URL::asset('js/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('js/lib/magnific-popup/magnific-popup.min.js') }}"></script>
  <script src="{{ URL::asset('js/lib/sticky/sticky.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ URL::asset('js/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ URL::asset('js/js/main.js') }}"></script>

</body>

<html>


