@extends('productTemplate')
@section('content')
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="#">{{$product->category->title}}</a></li>
            <li><a href="#">{{$product->title}}</a></li>
        </ul>
        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-md-12 col-sm-12">

                <div class="product-view row">
                    <div class="left-content-product col-lg-12 col-xs-12">
                        <div class="row">
                            <div class="content-product-left  col-sm-6 col-xs-12 ">
                                <div id="thumb-slider-vertical" class="thumb-vertical-outer">
                                    <span class="btn-more prev-thumb nt"><i class="fa fa-chevron-up"></i></span>
                                    <span class="btn-more next-thumb nt"><i class="fa fa-chevron-down"></i></span>
                                    <ul class="thumb-vertical">
                                        @foreach(getProductImagesPath($product->sku) as $imageUrl)
                                            <li class="owl2-item">
                                                <a data-index="{{$loop->index}}" class="img thumbnail"
                                                   data-image="{{$imageUrl}}"
                                                   title="{{$product->title}}">
                                                    <img src="{{$imageUrl}}"
                                                         title="{{$product->title}}" alt="{{$product->title}}">
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>


                                </div>
                                <div class="large-image  vertical">
                                    <img itemprop="image" class="product-image-zoom"
                                         src="{{getProductImagesPath($product->sku)[0]}}"
                                         data-zoom-image="{{getProductImagesPath($product->sku)[0]}}"
                                         title="Bint Beef" alt="Bint Beef">
                                </div>


                            </div>

                            <div class="content-product-right col-sm-6 col-xs-12">
                                <div class="title-product">
                                    <h1>{{$product->title}}</h1>
                                </div>
                                <!-- Review ---->


                                <div class="product-label form-group">
                                    <div class="stock"><span>Availability:</span> <span
                                            class="status-stock">In Stock</span></div>
                                    <div class="product_page_price price">
                                        <span class="price-new" itemprop="price">${{$product->price}}</span>
                                    </div>

                                </div>

                                <div class="product-box-desc">
                                    {{\Illuminate\Support\Str::limit($product->description, 1000)}}
                                    <a class="text-link" href="#producttab">Read More...</a>
                                </div>
                                <div id="product">
                                    <h4>Order Product</h4>
                                    <div class="form-group box-info-product">
                                        <div class="option quantity">
                                            <div class="input-group quantity-control" unselectable="on"
                                                 style="-webkit-user-select: none;">
                                                <label for="order-quantity">Quantity</label>
                                                <input id="order-quantity" class="form-control" type="text"
                                                       name="quantity" value="1">
                                                <input type="hidden" name="product_id" value="50">
                                                <span class="input-group-addon product_quantity_down">−</span>
                                                <span class="input-group-addon product_quantity_up">+</span>
                                            </div>
                                        </div>
                                        <div class="cart">
                                            <input type="button" data-toggle="tooltip" title="Order Product"
                                                   value="Order Product" data-loading-text="Loading..." id="button-cart"
                                                   class="btn btn-mega btn-lg"
                                                   data-original-title="Add to Cart">
                                        </div>

                                    </div>

                                </div>
                                <script>
                                    $(document).ready(function () {
                                        // onclick="cart.add('42', '1');
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                        $("input#button-cart").on('click', (el) => {
                                            el.preventDefault();
                                            let orderQuantity = $("input#order-quantity").val();
                                            $("h4#modal-order-quantity").html(orderQuantity);
                                            $("input#hidden-item-quantity").val(orderQuantity);
                                            let item = "{{$product->title}}";
                                            let modalOrderItemP = $("h4#modal-order-item").html(item);
                                            $("#order-modal").modal();
                                        })
                                    })
                                </script>
                            @if(session('orderSuccess'))
                                    <script>
                                        cart.add('42','1')
                                    </script>
                            @endif
                            <!-- end box info product -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bototm-detail">
                    <div class="row">
                        <div class="col-lg-3 col-md-4  col-xs-12">
                            <div class="module releate-horizontal">
                                <h3 class="modtitle"><span>Related Products</span></h3>
                                <div class="releate-product ">
                                    <div class="product-item-container">
                                        @foreach($relatedProducts as $rp)
                                            <div class="item-element clearfix">
                                                <div class="image">
                                                    <img src="{{getProductImagesPath($rp->sku)[1]}}"
                                                         title="{{$rp->title}}" class="img-1 img-responsive"/>
                                                </div>
                                                <div class="caption">


                                                    <h4>
                                                        <a href="{{url("product/$rp->slug")}}">{{\Illuminate\Support\Str::limit($rp->title, 40)}}</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="price-new">${{$rp->price}}</span>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-9 col-md-8  col-xs-12">
                            <!-- Product Tabs -->
                            <div class="producttab " id="producttab">
                                <div class="tabsslider  col-xs-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                                        {{--<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews
                                                (1)</a></li>
                                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
                                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a>
                                        </li>--}}
                                    </ul>
                                    <div class="tab-content col-xs-12">
                                        <div id="tab-1" class="tab-pane fade active in">
                                            {{$product->description}}

                                        </div>
                                        {{--<div id="tab-review" class="tab-pane fade">
                                            <form>
                                                <div id="review">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td style="width: 50%;"><strong>Super Administrator</strong>
                                                            </td>
                                                            <td class="text-right">29/07/2015</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p>Best this product opencart</p>
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-1x"></i><i
                                                                                class="fa fa-star-o fa-stack-1x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-1x"></i><i
                                                                                class="fa fa-star-o fa-stack-1x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-1x"></i><i
                                                                                class="fa fa-star-o fa-stack-1x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-1x"></i><i
                                                                                class="fa fa-star-o fa-stack-1x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star-o fa-stack-1x"></i></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="text-right"></div>
                                                </div>
                                                <h2 id="review-title">Write a review</h2>
                                                <div class="contacts-form">
                                                    <div class="form-group"><span class="icon icon-user"></span>
                                                        <input type="text" name="name" class="form-control"
                                                               value="Your Name"
                                                               onblur="if (this.value == '') {this.value = 'Your Name';}"
                                                               onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                                    </div>
                                                    <div class="form-group"><span class="icon icon-bubbles-2"></span>
                                                        <textarea class="form-control" name="text"
                                                                  onblur="if (this.value == '') {this.value = 'Your Review';}"
                                                                  onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                                    </div>
                                                    <span style="font-size: 11px;"><span
                                                            class="text-danger">Note:</span>						HTML is not translated!</span>

                                                    <div class="form-group">
                                                        <b>Rating</b> <span>Bad</span>&nbsp;
                                                        <input type="radio" name="rating" value="1"> &nbsp;
                                                        <input type="radio" name="rating"
                                                               value="2"> &nbsp;
                                                        <input type="radio" name="rating"
                                                               value="3"> &nbsp;
                                                        <input type="radio" name="rating"
                                                               value="4"> &nbsp;
                                                        <input type="radio" name="rating"
                                                               value="5"> &nbsp;<span>Good</span>

                                                    </div>
                                                    <div class="buttons clearfix"><a id="button-review"
                                                                                     class="btn buttonGray">Continue</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="tab-4" class="tab-pane fade">
                                            <a href="#">Monitor</a>,
                                            <a href="#">Apple</a>
                                        </div>
                                        <div id="tab-5" class="tab-pane fade">
                                            <table class="data-table" style="width: 100%;" border="1">
                                                <tbody>
                                                <tr>
                                                    <td>Brand</td>
                                                    <td><img
                                                            src="{{asset('storage/image/demo/shop/category/logo-client.png')}}"
                                                            title="Apple Cinema 30&quot;" class="img-1 img-responsive"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>History</td>
                                                    <td>Color sit amet, consectetur adipiscing elit. In gravida
                                                        pellentesque ligula, vel eleifend turpis blandit vel. Nam quis
                                                        lorem ut mi mattis ullamcorper ac quis dui. Vestibulum et
                                                        scelerisque ante, eu sodales mi. Nunc tincidunt tempus varius.
                                                        Integer ante dolor, suscipit non faucibus a, scelerisque vitae
                                                        sapien.
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                            <!-- //Product Tabs -->
                            <!-- Upsell Products -->
                            @include('includes.upSellProducts')
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        let zoomCollection = '.large-image img';
                        $(zoomCollection).elevateZoom({
                            zoomType: "inner",
                            lensSize: "200",
                            easing: true,
                            gallery: 'thumb-slider-vertical',
                            cursor: 'pointer',
                            galleryActiveClass: "active"
                        });
                        $('.large-image').magnificPopup({
                            items: [
                                    @foreach(getProductImagesPath($product->sku) as $imageUrl)
                                {
                                    src: "{{$imageUrl}}"
                                },
                                @endforeach
                            ],
                            gallery: {enabled: true, preload: [0, 2]},
                            type: 'image',
                            mainClass: 'mfp-fade',
                            callbacks: {
                                open: function () {

                                    var activeIndex = parseInt($('#thumb-slider-vertical .img.active').attr('data-index'));
                                    var magnificPopup = $.magnificPopup.instance;
                                    magnificPopup.goTo(activeIndex);
                                }
                            }
                        });
                        $("#thumb-slider-vertical .owl2-item").each(function () {
                            $(this).find("[data-index='0']").addClass('active');
                        });

                        $('.thumb-video').magnificPopup({
                            type: 'iframe',
                            iframe: {
                                patterns: {
                                    youtube: {
                                        index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
                                        id: 'v=', // String that splits URL in a two parts, second part should be %id%
                                        src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
                                    },
                                }
                            }
                        });

                        $('.product-options li.radio').click(function () {
                            $(this).addClass(function () {
                                if ($(this).hasClass("active")) return "";
                                return "active";
                            });

                            $(this).siblings("li").removeClass("active");
                            $(this).parent().find('.selected-option').html('<span class="label label-success">' + $(this).find('img').data('original-title') + '</span>');
                        });

                        var _isMobile = {
                            iOS: function () {
                                return navigator.userAgent.match(/iPhone/i);
                            },
                            any: function () {
                                return (_isMobile.iOS());
                            }
                        };

                        $(".thumb-vertical-outer .next-thumb").click(function () {
                            $(".thumb-vertical-outer .lSNext").trigger("click");
                        });

                        $(".thumb-vertical-outer .prev-thumb").click(function () {
                            $(".thumb-vertical-outer .lSPrev").trigger("click");
                        });

                        $(".thumb-vertical-outer .thumb-vertical").lightSlider({
                            item: 4,
                            autoWidth: false,
                            vertical: true,
                            slideMargin: 7,
                            verticalHeight: 425,
                            pager: false,
                            controls: true,
                            prevHtml: '<i class="fa fa-chevron-up"></i>',
                            nextHtml: '<i class="fa fa-chevron-down"></i>',
                            responsive: [
                                {
                                    breakpoint: 1199,
                                    settings: {
                                        verticalHeight: 330,
                                        item: 4,
                                    }
                                },
                                {
                                    breakpoint: 1024,
                                    settings: {
                                        verticalHeight: 235,
                                        item: 2,
                                        slideMargin: 5,
                                    }
                                },
                                {
                                    breakpoint: 768,
                                    settings: {
                                        verticalHeight: 340,
                                        item: 3,
                                    }
                                }
                                ,
                                {
                                    breakpoint: 480,
                                    settings: {
                                        verticalHeight: 100,
                                        item: 1,
                                    }
                                }

                            ]

                        });


                        // Product detial reviews button
                        $(".reviews_button,.write_review_button").click(function () {
                            var tabTop = $(".producttab").offset().top;
                            $("html, body").animate({scrollTop: tabTop}, 1000);
                        });
                    });

                </script>
            </div>
        </div>
        <!--Middle Part End-->
    </div>

    {{--    order modal--}}
    <div class="modal" tabindex="-1" role="dialog" id="order-modal">
        <div class="modal-dialog" role="document">
            {!! Form::open(['url' => 'order', 'method'=>'post']) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Order Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::label('name','Full Name') !!}
                        {!! Form::text('name','', ['required','placeholder'=>'Enter Full Name', 'class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('street', 'Street') !!}
                        {!! Form::text('street', '', ['required','placeholder'=>'Enter Street Address','class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('city', 'City') !!}
                        {!! Form::text('city','', ['required','placeholder'=>'Enter City Address','class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('State', 'State') !!}
                        {!! Form::text('state','',  ['required','placeholder'=>'Enter State Address','class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('country', 'Country') !!}
                        {!! Form::text('country','', ['required','placeholder'=>'Enter Country', 'class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone', 'Phone') !!}
                        {!! Form::text('phone','', ['required','placeholder'=>'Enter Phone Number','class'=>'form-control']) !!}
                    </div>
                    <div style="line-height: 20px">
                        <p style="margin: 10px 10px;">Item: </p>
                        <h4 style="margin: 10px 10px;" id="modal-order-item"></h4>
                        {!! Form::hidden("hidden_item_name", $product->title) !!}
                        <p style="margin: 10px 10px;">Quantity: </p>
                        <h4 style="margin: 10px 10px;" id="modal-order-quantity"></h4>
                        {!! Form::hidden('hidden_item_quantity', '', ['required','id'=>'hidden-item-quantity']) !!}
                    </div>


                </div>
                <div class="modal-footer">
                    {!! RecaptchaV3::field('order') !!}
                    {!! Form::submit('Place Order',['class'=>'btn btn-danger']) !!}
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
