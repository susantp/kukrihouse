<div class="related upsell titleLine products-list grid module ">
    <h3 class="modtitle"><span>Upsell Products</span></h3>
    <div class="upsell-products ">
        @foreach($upSellProducts->random(4) as $usp)
            <div class="product-layout">
                <div class="product-item-container">
                    <div class="left-block">
                        <div class="product-image-container second_img ">
                            <img src="{{getProductImagesPath($usp->sku)[0]}}"
                                 title="{{$usp->title}}" class="img-1 img-responsive"/>
                            <img src="{{getProductImagesPath($usp->sku)[2]}}"
                                 title="{{$usp->title}}" class="img-2 img-responsive"/>
                        </div>
                        <!--Sale Label-->
                        <span class="label label-sale">Sale</span>

                    </div>
                    <div class="right-block">
                        <div class="caption">
                            <h4><a href="{{url("product/$usp->slug")}}">{{$usp->title}}</a></h4>

                            <div class="price">
                                <span class="price-new">${{$usp->price}}</span>
{{--                                <span class="price-old">$122.00</span>--}}
{{--                                <span class="label label-percent">-40%</span>--}}
                            </div>
                            <div class="description item-desc hidden">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut l..</p>
                            </div>
                        </div>
                    </div><!-- right block -->

                </div>
            </div>
        @endforeach
    </div>
</div>
