<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <link rel="stylesheet" href="{{autoAsset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{autoAsset("css/animate.css")}}">
    <link rel="stylesheet" href="{{autoAsset("css/jquery-ui.min.css")}}">
    <link rel="stylesheet" href="{{autoAsset("css/meanmenu.min.css")}}">
    <link rel="stylesheet" href="{{autoAsset("css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{autoAsset("css/pe-icon-7-stroke.css")}}">
    <link rel="stylesheet" href="{{autoAsset("css/flaticon.css")}}">
    <link rel="stylesheet" href="{{autoAsset("venobox/venobox.css")}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{autoAsset("lib/css/nivo-slider.css")}}" type="text/css" />
    <link rel="stylesheet" href="{{autoAsset("lib/css/preview.css")}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{autoAsset("css/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{autoAsset("style.css")}}">
    <link rel="stylesheet" href="{{autoAsset("css/responsive.css")}}">
    <script src="{{autoAsset("js/vendor/modernizr-2.8.3.min.js")}}"></script>
</head>
<body>
<!--Header Area Start-->
@component('headers.index')@endcomponent
<!--Header Area End-->
<!-- Mobile Menu Start -->
@component('headers.mobile')@endcomponent
<!-- Mobile Menu End -->
<!-- slider Area Start -->
@component('headers.slider')@endcomponent
<!-- slider Area End-->
<!-- content -->
@yield('content')
<!-- Footer Area Start -->
@component('headers.footer')@endcomponent
<!-- Footer Area End -->
<!--Quickview Product Start -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" src="img/quick-view.jpg">
                            </div>
                        </div>
                        <div class="product-info">
                            <h1>Frame Princes Cut Diamond</h1>
                            <div class="price-box">
                                <p class="s-price"><span class="special-price"><span class="amount">$280.00</span></span></p>
                            </div>
                            <a href="product-details.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{autoAsset('js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{autoAsset("js/bootstrap.min.js")}}"></script>
<script src="{{autoAsset("js/owl.carousel.min.js")}}"></script>
<script src="{{autoAsset("js/jquery-ui.min.js")}}"></script>
<script src="{{autoAsset("js/jquery.counterup.min.js")}}"></script>
<script src="{{autoAsset("js/waypoints.min.js")}}"></script>
<script src="{{autoAsset("js/jquery.countdown.min.js")}}"></script>
<script type="text/javascript" src="{{autoAsset("venobox/venobox.min.js")}}"></script>
<script src="{{autoAsset("js/jquery.meanmenu.js")}}"></script>
<script src="{{autoAsset("js/wow.min.js")}}"></script>
<script>
    new WOW().init();
</script>
<script src="{{autoAsset("js/jquery.scrollUp.min.js")}}"></script>
<script src="{{autoAsset("js/plugins.js")}}"></script>
<script src="{{autoAsset("lib/js/jquery.nivo.slider.js")}}" type="text/javascript"></script>
<script src="{{autoAsset("lib/home.js")}}" type="text/javascript"></script>
<script src="{{autoAsset("js/main.js")}}"></script>
@yield('script')
@if ($message = Session::get('success'))
    <script>
        notify('{{ $message }}', 'success', 2000);
    </script>
@endif
@foreach ($errors->all() as $error)
    <script>
        notify('{{ $error }}', 'error', 1500);
    </script>
@endforeach
@stack('js')

</body>
</html>
