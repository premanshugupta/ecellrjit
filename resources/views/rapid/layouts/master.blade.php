<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('rapid_assets/img/Webp.png')}}" rel="icon">
  <link href="{{asset('rapid_assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('rapid_assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('rapid_assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('rapid_assets/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('rapid_assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('rapid_assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('rapid_assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('rapid_assets/css/style.css')}}" rel="stylesheet">
   <link href="{{asset('rapid_assets/css/next.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

  <!-- css and javascript -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!--  css and javascript -->

  <!-- Modal start-->
  <script>
  
  $(document).ready(function(){
    $('#mymodel').modal('show');



  });
  
</script>
  <!-- Modal end -->
</head>

<body>

  @include('rapid.layouts.header')
  @yield('content')
  @include('rapid.layouts.footer')


   <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{asset('rapid_assets/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('rapid_assets/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('rapid_assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('rapid_assets/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('rapid_assets/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{asset('rapid_assets/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('rapid_assets/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('rapid_assets/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('rapid_assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('rapid_assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('rapid_assets/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('rapid_assets/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('rapid_assets/js/main.js')}}"></script>

</body>
</html>
