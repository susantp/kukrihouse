<header id="header" class="variantleft type_2" style="display: block;">
    <!-- Header Top -->

    <!-- //Header Top -->
    <!-- Header center -->
    <div class="header-center">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="navbar-logo col-md-3 col-sm-4 col-xs-12">
                    <a href="{{route('index')}}">
                        <img src="{{asset('storage/image/demo/logos/logo.png')}}"
                             title="{{config('app.name')}}" alt="{{config('app.name')}}">

                    </a>
                </div>
                <!-- //End Logo -->
                <div class="header-center-right col-md-9 col-sm-8 col-xs-12">
                    <div class=" email hidden-xs">
                        <div class="inner-info">
                            <h2>For Inquiry:</h2>
                            <p>inquiry@egkukrihouse.com</p>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="phone-contact hidden-xs">
                        <div class="inner-info">
                            <h2>Hotline:</h2>
                            <p>(800) 936 - 0737</p>
                        </div>
                    </div>
                    <!-- //End Phone -->

                </div>
            </div>
        </div>
    </div>
    <!-- //Header center -->
    <!-- Header Bottom -->
    <div class="header-bottom compact-hidden">
        <div class="container">
            <div class="rows">
                <div class="header-bottom-inner">

                    <div class="header-bottom-menu col-md-8 col-sm-2 col-xs-2">
                        <div class="responsive so-megamenu  megamenu-style-dev">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse"
                                                class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="megamenu-wrapper ">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container">
                                                <ul class="megamenu " data-transition="slide" data-animationtime="250">
                                                    <li class="home hover">
                                                        <a href="#">Categories <b class="caret"></b></a>
                                                        <div class="sub-menu"
                                                             style="width: 100%; display: none; right: auto;">
                                                            <div class="content" style="display: none; height: 473px;">
                                                                <div class="row">
                                                                    @foreach($categories as $category)
                                                                        <div class="col-md-4">
                                                                            <a href='{{url("category/$category->slug")}}'
                                                                               class="image-link">
                                                                                <span class="thumbnail"></span>
                                                                                <h3 class="figcaption">{{$category->title}}</h3>
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('page/about-us')}}" class="clearfix">
                                                            <strong>About Us</strong>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('page/about-gurkha')}}" class="clearfix">
                                                            <strong>The Gurkhas</strong>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{url('page/about-the-kukri')}}" class="clearfix">
                                                            <strong>The Kukri</strong>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('page/kukri-making-process')}}" class="clearfix">
                                                            <strong>Kukri Making</strong>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-10 col-xs-10 header_search">

                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
