<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Basic page needs
	============================================ -->
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="kukri, ex gurkha, gurkha hat, ex gurkha kukri house, kukri house"/>
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->

    <link rel="shortcut icon" href="{{asset('storage/ico/favicon.png')}}">

    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet'
          type='text/css'>

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('storage/css/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('storage/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('storage/js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('storage/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('storage/css/themecss/lib.css')}}" rel="stylesheet">
    <link href="{{asset('storage/js/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('storage/js/lightslider/lightslider.css')}}" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="{{asset('storage/css/themecss/so_megamenu.css')}}" rel="stylesheet">
    <link href="{{asset('storage/css/themecss/so-categories.css')}}" rel="stylesheet">
    <link href="{{asset('storage/css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
    <link id="color_scheme" href="{{asset('storage/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('storage/css/responsive.css')}}" rel="stylesheet">


    <!-- Include Libs & Plugins
    ============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{asset('storage/js/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/owl-carousel/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/themejs/libs.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/unveil/jquery.unveil.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/countdown/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/datetimepicker/moment.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('storage/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/lightslider/lightslider.js')}}"></script>

    <!-- Theme files
    ============================================ -->


    <script type="text/javascript" src="{{asset('storage/js/themejs/so_megamenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/themejs/addtocart.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/themejs/application.js')}}"></script>

    {!! RecaptchaV3::initJs() !!}
</head>
<noscript>
    <style type="text/css">body { display: none; } </style>
    <meta http-equiv="refresh" content="0; url={{route('index')}}">
</noscript>

<body class="res layout-subpage">
<div id="wrapper" class="wrapper-full ">
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">
        <!-- Header Top -->
    @include('includes/header')
    <!-- //Header Top -->
        <!-- Header center -->
        <!-- //Header center -->
        <!-- Header Bottom -->
    </header>
    <!-- //Header Container  -->
    <!-- Main Container  -->
@yield('content')
<!-- //Main Container -->
    <script type="text/javascript"><!--
        var $typeheader = 'header-home7';
        //-->
    </script>
    <!-- Footer Container -->
    <footer class="footer-container typefooter-1">
        @include('includes.footer')
    </footer>
    <!-- //end Footer Container -->
</div>





<link rel='stylesheet' property='stylesheet' href='{{asset('storage/css/themecss/cpanel.css')}}' type='text/css'
      media='all'/>
<script type="text/javascript" src="{{asset('storage/js/themejs/cpanel.js')}}"></script>    <!-- //Cpanel Block -->

<!-- Preloading Screen -->

<!-- End Preloading Screen -->


</body>
</html>
