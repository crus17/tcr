<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$settings->site_name}} | {{$settings->site_title}}</title>
    <link rel="icon" href="{{ asset ('temp/img/favicon.png')}}" type="image/png" sizes="32x32">



   <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/css/bootstrap.min.css')}}">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/css/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/css/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/css/font-awesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/css/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/css/shop.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/revslider/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('zenith/css/custom.css')}}">

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="javascript:void(0)" data-style="styles">
    <link rel="stylesheet" href="{{ asset ('zenith/css/style-customizer.css')}}" />


    <!-- JavaScript Libraries -->
    <script src="{{ asset('zenith/js/jquery-min.js') }}"></script>
    <script src="{{ asset('zenith/js/popper.min.js') }}"></script>
    <script src="{{ asset('zenith/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('zenith/js/widget.js') }}"></script>
    <script src="{{ asset('zenith/js/all-plugins.js') }}"></script>
    <script src="{{ asset('zenith/js/particles.js') }}"></script>
    <script src="{{ asset('zenith/js/style-customizer.js') }}"></script>
    <script src="{{ asset('zenith/revslider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('zenith/revslider/js/jquery.themepunch.revolution.min.js') }}"></script>
    
    <script src="{{ asset('zenith/revslider/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('zenith/revslider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('zenith/revslider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('zenith/revslider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('zenith/revslider/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('zenith/revslider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('zenith/revslider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('zenith/revslider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('zenith/revslider/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="tawkto.js"></script>
    
    <!-- Template Main Javascript File -->
    <script src="{{ asset('zenith/js/custom.js') }}"></script>

</head>