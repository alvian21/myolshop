<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coza Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="turbolinks-cache-control" content="no-cache">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/MagnificPopup/magnific-popup.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <!--===============================================================================================-->
</head>

<body id="bodydata">

    <div id="app">
        <!-- Header -->
        @include('layouts.header')


        <!-- Sidebar -->
        <aside class="wrap-sidebar js-sidebar">
            <div class="s-full js-hide-sidebar"></div>

            <div class="sidebar flex-col-l p-t-22 p-b-25">
                <div class="flex-r w-full p-b-30 p-r-27">
                    <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
                        <i class="zmdi zmdi-close"></i>
                    </div>
                </div>

                <div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
                    <ul class="sidebar-link w-full">
                        <li class="p-b-13">
                            <a href="index.html" class="stext-102 cl2 hov-cl1 trans-04">
                                Home
                            </a>
                        </li>

                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                My Wishlist
                            </a>
                        </li>

                        <li class="p-b-13">
                        <a href="{{route('login')}}" class="stext-102 cl2 hov-cl1 trans-04">
                                My Account
                            </a>
                        </li>

                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                Track Oder
                            </a>
                        </li>

                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                Refunds
                            </a>
                        </li>

                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                Help & FAQs
                            </a>
                        </li>
                    </ul>

                    <div class="sidebar-gallery w-full p-tb-30">
                        <span class="mtext-101 cl5">
                            @ CozaStore
                        </span>

                        <div class="flex-w flex-sb p-t-36 gallery-lb">
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-01.jpg" data-lightbox="gallery"
                                    style="background-image: url('{{asset('assets/images/gallery-01.jpg')}}');"></a>
                            </div>

                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-02.jpg" data-lightbox="gallery"
                                    style="background-image: url('{{asset('assets/images/gallery-01.jpg')}}');"></a>
                            </div>

                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-03.jpg" data-lightbox="gallery"
                                    style="background-image: url('{{asset('assets/images/gallery-01.jpg')}}');"></a>
                            </div>

                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-04.jpg" data-lightbox="gallery"
                                    style="background-image: url('{{asset('assets/images/gallery-01.jpg')}}');"></a>
                            </div>

                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-05.jpg" data-lightbox="gallery"
                                    style="background-image: url('{{asset('assets/images/gallery-01.jpg')}}');"></a>
                            </div>

                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-06.jpg" data-lightbox="gallery"
                                    style="background-image: url('{{asset('assets/images/gallery-01.jpg')}}');"></a>
                            </div>

                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-07.jpg" data-lightbox="gallery"
                                    style="background-image: url('{{asset('assets/images/gallery-01.jpg')}}');"></a>
                            </div>

                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-08.jpg" data-lightbox="gallery"
                                    style="background-image: url('{{asset('assets/images/gallery-01.jpg')}}');"></a>
                            </div>

                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="images/gallery-09.jpg" data-lightbox="gallery"
                                    style="background-image:url('{{asset('assets/images/gallery-01.jpg')}}');"></a>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-gallery w-full">
                        <span class="mtext-101 cl5">
                            About Us
                        </span>

                        <p class="stext-108 cl6 p-t-27">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus vulputate
                            hendrerit. Praesent faucibus erat vitae rutrum gravida. Vestibulum tempus mi enim, in
                            molestie sem fermentum quis.
                        </p>
                    </div>
                </div>
            </div>
        </aside>


        <!-- Cart -->
        <div class="wrap-header-cart js-panel-cart">
            <div class="s-full js-hide-cart"></div>

            <div class="header-cart flex-col-l p-l-65 p-r-25">
                <div class="header-cart-title flex-w flex-sb-m p-b-8">
                    <span class="mtext-103 cl2">
                        Your Cart
                    </span>

                    <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                        <i class="zmdi zmdi-close"></i>
                    </div>
                </div>

                <div class="header-cart-content flex-w js-pscroll">
                    <ul class="header-cart-wrapitem w-full">
                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    White Shirt Pleat
                                </a>

                                <span class="header-cart-item-info">
                                    1 x $19.00
                                </span>
                            </div>
                        </li>

                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="{{asset('assets/images/item-cart-02.jpg')}}" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    Converse All Star
                                </a>

                                <span class="header-cart-item-info">
                                    1 x $39.00
                                </span>
                            </div>
                        </li>

                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="{{asset('assets/images/item-cart-03.jpg')}}" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    Nixon Porter Leather
                                </a>

                                <span class="header-cart-item-info">
                                    1 x $17.00
                                </span>
                            </div>
                        </li>
                    </ul>

                    <div class="w-full">
                        <div class="header-cart-total w-full p-tb-40">
                            Total: $75.00
                        </div>

                        <div class="header-cart-buttons flex-w w-full">
                            <a href="shoping-cart.html"
                                class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                                View Cart
                            </a>

                            <a href="shoping-cart.html"
                                class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                                Check Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @yield('content')
        {{isset($slot) ? $slot : null}}



        <!-- Footer -->
        <footer class="bg3 p-t-75 p-b-32">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Categories
                        </h4>

                        <ul>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Women
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Men
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Shoes
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Watches
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Help
                        </h4>

                        <ul>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Track Order
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Returns
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Shipping
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    FAQs
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            GET IN TOUCH
                        </h4>

                        <p class="stext-107 cl7 size-201">
                            Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call
                            us on (+1) 96 716 6879
                        </p>

                        <div class="p-t-27">
                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Newsletter
                        </h4>

                        <form>
                            <div class="wrap-input1 w-full p-b-4">
                                <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                                    placeholder="email@example.com">
                                <div class="focus-input1 trans-04"></div>
                            </div>

                            <div class="p-t-18">
                                <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="p-t-40">
                    <div class="flex-c-m flex-w p-b-18">
                        <a href="#" class="m-all-1">
                            <img src="{{asset('assets/images/icons/icon-pay-01.png')}}" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="{{asset('assets/images/icons/icon-pay-02.png')}}" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="{{asset('assets/images/icons/icon-pay-03.png')}}" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="{{asset('assets/images/icons/icon-pay-04.png')}}" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="{{asset('assets/images/icons/icon-pay-05.png')}}" alt="ICON-PAY">
                        </a>
                    </div>


                </div>
            </div>
        </footer>


        <!-- Back to top -->
        <div class="btn-back-to-top" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <i class="zmdi zmdi-chevron-up"></i>
            </span>
        </div>

        <!-- Modal1 -->
        <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
            <div class="overlay-modal1 js-hide-modal1"></div>

            <div class="container">
                <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                    <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                        <img src="{{asset('assets/images/icons/icon-close.png')}}" alt="CLOSE">
                    </button>

                    <div class="row">
                        <div class="col-md-6 col-lg-7 p-b-30">
                            <div class="p-l-25 p-r-30 p-lr-0-lg">
                                <div class="wrap-slick3 flex-sb flex-w">
                                    <div class="wrap-slick3-dots"></div>
                                    <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                                    <div class="slick3 gallery-lb">
                                        <div class="item-slick3"
                                            data-thumb="{{asset('assets/images/product-detail-01.jpg')}}">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="{{asset('assets/images/product-detail-01.jpg')}}"
                                                    alt="IMG-PRODUCT">

                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                    href="images/product-detail-01.jpg">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="item-slick3"
                                            data-thumb="{{asset('assets/images/product-detail-01.jpg')}}">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="{{asset('assets/images/product-detail-02.jpg')}}"
                                                    alt="IMG-PRODUCT">

                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                    href="images/product-detail-02.jpg">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="item-slick3"
                                            data-thumb="{{asset('assets/images/product-detail-01.jpg')}}">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="{{asset('assets/images/product-detail-03.jpg')}}"
                                                    alt="IMG-PRODUCT">

                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                    href="images/product-detail-03.jpg">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-5 p-b-30">
                            <div class="p-r-50 p-t-5 p-lr-0-lg">
                                <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                    Lightweight Jacket
                                </h4>

                                <span class="mtext-106 cl2">
                                    $58.79
                                </span>

                                <p class="stext-102 cl3 p-t-23">
                                    Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris
                                    consequat ornare feugiat.
                                </p>

                                <!--  -->
                                <div class="p-t-33">
                                    <div class="flex-w flex-r-m p-b-10">
                                        <div class="size-203 flex-c-m respon6">
                                            Size
                                        </div>

                                        <div class="size-204 respon6-next">
                                            <div class="rs1-select2 bor8 bg0">
                                                <select class="js-select2" name="time">
                                                    <option>Choose an option</option>
                                                    <option>Size S</option>
                                                    <option>Size M</option>
                                                    <option>Size L</option>
                                                    <option>Size XL</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-w flex-r-m p-b-10">
                                        <div class="size-203 flex-c-m respon6">
                                            Color
                                        </div>

                                        <div class="size-204 respon6-next">
                                            <div class="rs1-select2 bor8 bg0">
                                                <select class="js-select2" name="time">
                                                    <option>Choose an option</option>
                                                    <option>Red</option>
                                                    <option>Blue</option>
                                                    <option>White</option>
                                                    <option>Grey</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-w flex-r-m p-b-10">
                                        <div class="size-204 flex-w flex-m respon6-next">
                                            <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                                <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                                </div>

                                                <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                    name="num-product" value="1">

                                                <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                                </div>
                                            </div>

                                            <button
                                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!--  -->
                                <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                                    <div class="flex-m bor9 p-r-10 m-r-11">
                                        <a href="#"
                                            class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100"
                                            data-tooltip="Add to Wishlist">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>

                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                                        data-tooltip="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                                        data-tooltip="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>

                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                                        data-tooltip="Google Plus">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>

    <script>
        $(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>

    <script src="{{asset('assets/js/slick-custom.js')}}"></script>

    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/parallax100/parallax100.js')}}"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/sweetalert/sweetalert.min.js')}}"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script>
        $('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/js/main.js')}}"></script>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>

</body>

</body>

</html>
