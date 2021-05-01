<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Basic page needs
	============================================ -->
    <title>Welcome | Ex Gurkha Kuri House</title>
    <meta charset="utf-8">
    <meta name="keywords"
          content="kukri, ex gurkha, gurkha hat, ex gurkha kukri house, kukri house"/>
    <meta name="author" content="{{config('app.name')}}">
    <meta name="robots" content="index, follow"/>

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->

    <link rel="shortcut icon" href="ico/favicon.png">

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

    <!-- Theme CSS
    ============================================ -->
    <link href="{{asset('storage/css/themecss/so_megamenu.css')}}" rel="stylesheet">
    <link href="{{asset('storage/css/themecss/so-categories.css')}}" rel="stylesheet">
    <link href="{{asset('storage/css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
    <link href="{{asset('storage/css/themecss/slider.css')}}" rel="stylesheet">
    <link id="color_scheme" href="{{asset('storage/css/home7.css')}}" rel="stylesheet">
    <link href="{{asset('storage/css/responsive.css')}}" rel="stylesheet">
    <style>

        @media (min-width: 1200px) {
            .container-slider .show.preset01-4 .slider {
                width: 100% !important;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            .container-slider .show.preset01-4 .slider {
                width: 100% !important;
            }
        }
        @media (min-width: 769px) and (max-width: 1200px){
            .container-slider .show.preset01-4 .slider {
                width: 100% !important;
            }
        }

    </style>

</head>

<body class="common-home res layout-home7">
<div id="wrapper" class="wrapper-full banners-effect-7">
    <!-- Header Container  -->
@include('includes/header')
<!-- //Header Container  -->
    <!-- Main Container  -->
    <main id="content" class="page-main">
        <!-- Block Spotlight1  -->
        <div class="so-spotlight1 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <iframe width="100%" height="750" src="https://www.youtube.com/embed/EQIN9i-70jo?autoplay=0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay=1; clipboard-write;controls=0; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--Block Spotlight2  -->
        <div class="so-spotlight2">
            <div class="container">
                <ul class="mudule list-services row">
                    <li class="item-service col-lg-6 col-md-6 col-sm-6 col-xs-12"><a title="Free Shipping" href="#"><img
                                class="img-1 img-responsive lazyload" data-sizes="auto"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-src="{{asset('storage/image/demo/cms/delivery-partners.png')}}"
                                alt="Free Shipping"></a></li>
                    <li class="item-service col-lg-6 col-md-6 col-sm-6 col-xs-12"><a title="Guaranteed" href="#"><img
                                class="img-1 img-responsive lazyload" data-sizes="auto"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-src="{{asset('storage/image/demo/cms/satisfaction-guaranteed.png')}}"
                                alt="Guaranteed"></a></li>

                </ul>
            </div>
        </div>
        <!-- Block Spotlight3  -->
        <div class="so-spotlight3">
            <div class="container">
            @foreach($categories->where('show_on_homepage', 1) as $category)
                @php
                    $divID = '';
                    switch ($loop->iteration){
                        case "1":
                            $divID = "so_category_slider_home7";
                            break;
                        case "2":
                            $divID = "so_category_slider_h7-2";
                            break;
                        case "3":
                            $divID = "so_category_slider_h7-3";
                            break;
                        default:
                            $divID = "so_category_slider_h7-4";
                            break;
                    }
                @endphp
                <!-- Mod Category Slider1 -->
                    <div id="{{$divID}}" class="container-slider module item4">
                        <div class="page-top">
                            <h3 class="modtitle">
                                <span>{{$category->title}}	</span>
                            </h3>
                        </div> <!-- /.page-top -->
                        <div class="modcontent">

                            <div
                                class="categoryslider-content products-list grid show preset01-4 preset02-4 preset03-4 preset04-2 preset05-1">
                                <div class="slider slider-h7 so-category-slider not-js product-layout">
                                    @foreach($category->products->take(6) as $product)
                                        <div class="item product-layout">
                                            <div class="item-inner product-thumb transition product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <div class="image">
                                                            <a class="lt-image" href="{{url("product/$product->slug")}}"
                                                               target="_self"
                                                               title="Juren tima chukam">
                                                                <img class="img-1 img-responsive lazyload"
                                                                     data-sizes="auto"
                                                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                     data-src="{{getProductImagesPath($product->sku)[2]}}"
                                                                     alt="{{$product->title}}">
                                                                <img class="img-2 img-responsive lazyload"
                                                                     data-sizes="auto"
                                                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                     data-src="{{getProductImagesPath($product->sku)[0]}}"
                                                                     alt="{{$product->title}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="{{url("product/$product->slug")}}"
                                                               title="Juren tima chukam"
                                                               target="_self">{{$product->title}}</a>
                                                        </h4>
                                                        <p class="price">
                                                            <span class="price-new">$ {{$product->price}}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    {{--<button class="wishlist btn-button" type="button"
                                                            data-toggle="tooltip"
                                                            title="Add to Wish List" onclick="wishlist.add('42');"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button class="addToCart" type="button" data-toggle="tooltip"
                                                            title="Add to Cart" onclick="cart.add('42', '1');"><i
                                                            class="fa fa-shopping-cart"></i> <span
                                                            class="hidden-xs"></span>
                                                    </button>
                                                    <button class="compare" type="button" data-toggle="tooltip"
                                                            title="Compare this Product" onclick="compare.add('42');"><i
                                                            class="fa fa-exchange"></i></button>
                                                    <a class="quickview iframe-link visible-lg btn-button"
                                                       data-toggle="tooltip"
                                                       title="" data-fancybox-type="iframe" href="{{url("product/$product->id")}}"
                                                       data-original-title="Quickview"> <i class="fa fa-search"></i>
                                                    </a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Mod -->
                @endforeach
            </div>
        </div>
    </main>
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
<!-- Social widgets -->
<section class="social-widgets visible-lg">
    <ul class="items">
        <li class="item item-01 facebook"><a href="php/facebook.php?account=envato" class="tab-icon"><span
                    class="fa fa-facebook"></span></a>
            <div class="tab-content">
                <div class="title">
                    <h5>FACEBOOK</h5>
                </div>
                <div class="loading">
                    <img class="lazyload" data-sizes="auto"
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                         data-src="{{asset('storage/image/theme/lazy-loader.gif')}}" alt="loader">
                </div>
            </div>
        </li>
        <li class="item item-02 twitter"><a href="php/twitter.php?account_twitter=envato" class="tab-icon"><span
                    class="fa fa-twitter"></span></a>
            <div class="tab-content">
                <div class="title">
                    <h5>TWITTER FEEDS</h5>
                </div>
                <div class="loading">
                    <img class="lazyload" data-sizes="auto"
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                         data-src="image/theme/lazy-loader.gif" alt="loader">
                </div>
            </div>
        </li>
        <li class="item item-03 youtube"><a href="php/youtubevideo.php?account_video=PY2RLgTmiZY" class="tab-icon"><span
                    class="fa fa-youtube"></span></a>
            <div class="tab-content">
                <div class="title">
                    <h5>YouTube</h5>
                </div>
                <div class="loading"><img class="lazyload" data-sizes="auto"
                                          src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                          data-src="{{asset('storage/image/theme/lazy-loader.gif')}}" alt="loader">
                </div>
            </div>
        </li>
    </ul>
</section>
<!-- End Social widgets -->
</body>
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
<script type="text/javascript" src="{{asset('storage/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('storage/js/jquery-ui/jquery-ui.min.js')}}"></script>


<!-- Theme files
============================================ -->
<script type="text/javascript" src="{{asset('storage/js/themejs/application.js')}}"></script>
<script type="text/javascript" src="{{asset('storage/js/themejs/toppanel.js')}}"></script>
<script type="text/javascript" src="{{asset('storage/js/themejs/so_megamenu.js')}}"></script>
<script type="text/javascript" src="{{asset('storage/js/themejs/addtocart.js')}}"></script>

<script type="text/javascript" src="{{asset('storage/js/themejs/accordion.js')}}"></script>
<script type="text/javascript" src="{{asset('storage/js/themejs/cpanel.js')}}"></script>
</html>
