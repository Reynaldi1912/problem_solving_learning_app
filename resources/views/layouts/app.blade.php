<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>









<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Proyek 1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="/https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.1.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <!-- <div id="app"> -->
   

        <main class="py-4">
        @include('layouts.header')

            @yield('content')

        @extends('layouts.footer')
        </main>
    <!-- </div> -->


     <!-- Vendor JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script>
    $('.readmore-btn').on('click',function(){
      $(this).parent().parent().toggleClass("showContent");
    })
    $("#click").on('click',function () {
      $("#button-click").toggleClass('fa-arrow-down fa-arrow-up'); 
    });


    var loc = window.location.href;
    $('.nav-detail ul li a').each(function () {
      var status = loc.indexOf($(this).attr('href'));
      $(this).closest('li').removeClass('actived');
      console.log(status);

    if ( -1 != status ) {
      console.log(status);
      $(this).closest('li').addClass('actived');
    }

    });

    $(document).ready(function() {
      $('.readmore-btn1').on('click',function(){
        $(this).parent().parent().toggleClass("show-Content not-Show");
      })
      $('.readmore-btn1').on('click',function(){
        $('.boxx .show-Content .keterangan1').removeClass("d-none");
      })
      $('.readmore-btn1').on('click',function(){
        $('.boxx .not-Show .keterangan1').addClass("d-none");
      })
      // $(".boxx").click(function(){
      //   $(".show-Content").switchClass("show-Content", "not-Show", 500);
      //   $(".not-Show").switchClass("not-SHow", "Show-Content", 500);
      // });

      // $(".keterangan1").hide();
      // $('#click1').on('click',function(){
      //   $(".keterangan1").toggleClass("dp-block");
      // })
      
      $("#click1").on('click',function () {
        $("#button-click1").toggleClass('fa-arrow-down fa-arrow-up'); 
      });

    });
  </script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
</body>
</html>
