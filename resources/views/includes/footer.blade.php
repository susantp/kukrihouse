<!-- Footer Top -->
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="module social_block col-md-3 col-sm-12 col-xs-12">
                    <ul class="social-block ">
                        <li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech"
                                                target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons"
                                               target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="rss"><a class="_blank" href="#" target="_blank"><i class="fa fa-rss"></i></a>
                        </li>
                        <li class="google_plus"><a class="_blank"
                                                   href="https://plus.google.com/u/0/+Smartaddons/posts"
                                                   target="_blank"><i class="fa  fa-google-plus"></i></a></li>
                        <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/"
                                                 target="_blank"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="module news-letter col-md-9 col-sm-12 col-xs-12">
                    <div class="newsletter">
                        <div class="title-block">
                            <div class="page-heading">SIGN UP FOR OUR NEWSLETTER</div>
                            <div class="pre-text">

                            </div>
                        </div>
                        <div class="block_content">
                            <form method="post" name="signup" id="signup" class="btn-group form-inline signup">
                                <div class="form-group required send-mail">
                                    <div class="input-box">
                                        <input type="email" placeholder="Your email address..." value=""
                                               class="form-control" id="txtemail" name="txtemail" size="55">
                                    </div>
                                    <div class="subcribe">
                                        <button class="btn btn-default btn-lg" type="submit"
                                                onclick="return subscribe_newsletter();" name="submit">
                                            Subscribe
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Center -->
<div class="footer-center">
    <div class="container content">
        <div class="row">
            <!-- Box Info -->
            <div class="col-md-3 col-sm-6 col-xs-12 collapsed-block footer-links box-footer">
                <div class="module ">
                    <div class="content-block-footer">
                        <div class="footer-logo">
                            <a href="{{route('index')}}"><img class="lazyload" data-sizes="auto"
                                                              src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('storage/image/demo/logos/logo.png')}}"
                                                              title="{{config('app.name')}}" alt="Your Store"/></a>
                        </div>
                        <p>
                            <b>
                                EGKH. Ex Gurkha Kukri House</b>, established in 2005 has proved to be the best manufacturer of
                            Kukris in Nepal. This achievement is largely due to its strict adherence to quality and customers’
                            satisfaction. Through these years, EGKH. has come up with many varieties of kukris, some that
                            already existed, some EGKH. newly discovered and some this house designed on its own to
                            improvise and to keep the legend of Kukris and Gurkha alive.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Box Accout -->
            <div class="col-md-3 col-sm-6 box-account box-footer">
                <div class="module clearfix">
                    <h3 class="modtitle">Useful Information</h3>
                    <div class="modcontent">
                        <ul class="menu">
                            <li><a href="{{url('page/about-gurkha')}}">The Gurkhas</a></li>
                            <li><a href="{{url('page/gurkha-hat-history')}}">Gurkha Hat History</a></li>
                            <li><a href="{{url('page/kukri-making-process')}}">Kukri Making</a></li>
                            <li><a href="{{url('page/satisfaction-guarantee')}}">Satisfaction Guarantee</a></li>
                            <li><a href="{{url('page/how-to-maintain-your-kukri')}}">Maintain Your Kukri</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Box Infomation -->
            <div class="col-md-3 col-sm-6 box-information box-footer">
                <div class="module clearfix">
                    <h3 class="modtitle">USA Address</h3>
                    <div class="modcontent">
                        <ul class="contact-address">
                            <li> <strong>EGKH. Ex Gurkha Kukri House,</strong> </li>
                            <li><span class="fa fa-home"></span>27290 Highland Ave suite 4B</li>
                            <li>Jamaica Est. New York, NY 11432</li>
                            <li><span class="fa fa-envelope"></span>sales@egkukrihouse.com</li>
{{--                            <li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789</li>--}}
                        </ul>

                    </div>
                </div>
            </div>
            <!-- Box About -->
            <div class="col-md-3  col-sm-6 collapsed-block box-footer">
                <div class="module ">
                    <h3 class="modtitle">Nepal Address</h3>
                    <div class="modcontent">
                        <ul class="contact-address">
                            <li><strong>EGKH. Ex Gurkha Kukri House,</strong></li>
                            <li><span class="fa fa-home"></span> THAMEL-29,</li>
                            <li>Kathmandu, Nepal</li>
                            <li><span class="fa fa-envelope">
                                </span>sales@egkukrihouse.com</li>
                        </ul>
                        <ul class="payment-method">
                            <li><a title="Payment Method" href="#"><img class="lazyload" data-sizes="auto"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                        data-src="{{asset('storage/image/demo/cms/payment/payment-1.png')}}"
                                                                        alt="Payment"></a></li>
                            <li><a title="Payment Method" href="#"><img class="lazyload" data-sizes="auto"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                        data-src="{{asset('storage/image/demo/cms/payment/payment-2.png')}}"
                                                                        alt="Payment"></a></li>
                            <li><a title="Payment Method" href="#"><img class="lazyload" data-sizes="auto"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                        data-src="{{asset('storage/image/demo/cms/payment/payment-3.png')}}"
                                                                        alt="Payment"></a></li>
                            <li><a title="Payment Method" href="#"><img class="lazyload" data-sizes="auto"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                        data-src="{{asset('storage/image/demo/cms/payment/payment-4.png')}}"
                                                                        alt="Payment"></a></li>
                            <li><a title="Payment Method" href="#"><img class="lazyload" data-sizes="auto"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                        data-src="{{asset('storage/image/demo/cms/payment/payment-5.png')}}"
                                                                        alt="Payment"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER BOTTOM -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                {{config('app.name')}} © 2000 - {{date('Y')}}. {{config('app.name')}} Store. All Rights Reserved.
            </div>
            <div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
        </div>
    </div>
</div>
