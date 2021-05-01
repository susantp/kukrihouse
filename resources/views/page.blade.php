@extends('productTemplate')
@section('content')
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{url("page/$page->slug")}}">Page</a></li>
            <li><a href="{{url("page/$page->slug")}}">{{$page->title}}</a></li>
        </ul>

        <div class="row">
            <div id="content" class="col-sm-12">

                <div class="about-us about-demo-2">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 about-us-center">
                            <h2 class="about-title">{{$page->title}}</h2>
                            <div class="about-image-slider">
                                <!--<div id="ytcs579c0714641b9213691469843220" class="yt-content-slider owl-theme yt-content-slider-style-1 arrow-default owl2-carousel owl2-theme owl2-loaded" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="" data-item_lg="1" data-item_sm="1" data-item_xs="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="no">-->
                                <!--    <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="{{asset('storage/image/demo/about/about-1.jpg')}}" alt="About Us"> </div>-->
                                <!--    <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="{{asset('storage/image/demo/about/about-2.jpg')}}" alt="About Us"> </div>-->
                                <!--    <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="{{asset('storage/image/demo/about/about-3.jpg')}}" alt="About Us"> </div>-->
                                <!--</div>-->

                            </div>
                            <div class="content-description">

                                <p>{!! $page->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
