<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Myqueen</title>

    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('asset/image/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/adminlte.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/font/animate.min.css') }}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/font/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/font/owl.carousel.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/font/demo-beauty.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/alert/toastr.min.css') }}">

    <!-- Main CSS File -->


    <link rel="stylesheet" href="{{ asset('asset/css/jquery-ui.css') }}">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="header-left">
                        <div class="welcome-msg">
                            <a href="contact-us.html" class="contact"><i class="d-icon-map"></i>
                                {{ __('index.find_myqueen_store') }}
                            </a>
                        </div>
                    </div>
                    <div class="header-right">

                        <a class="call" href="tel:#06567219257">
                            <i class="d-icon-phone"></i>
                            <span>Call us: </span>+6567219257
                        </a>
                        @auth
                            <a href="#" class="wishlist"><i
                                    class="d-icon-heart"></i>Wishlist</a>
                            <div class="dropdown ml-5">
                                <a href="#"><i class="d-icon-user"></i> &nbsp;
                                    My
                                    Account</a>
                                <ul class="dropdown-box">
                                    <li><a href="{{ URl::signedRoute('users.profile.index') }}">Profile</a></li>
                                    <li><a href="{{ URL::signedRoute('MLM.tree.index') }}">Affilate Marketing</a></li>
                                    <li><a href="{{ route('Referal') }}">Refer to friend</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Credit Wallet</a></li>
                                    <li><a href="#">Credit Point Wallet </a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>


                            <div class="dropdown cart-dropdown  type3 ml-2">
                                <a href="{{ URL::signedRoute('users.cart.index') }}" class="cart-toggle">
                                    <i class="d-icon-bag"></i>
                                    My Cart <span id="all_cart_count"> </span>
                                </a>
                                <div class="cart-overlay"></div>
                            </div>
                        @endauth

                        @guest
                            <a href="{{ route('login') }}" class="___class_+?15___"><i class="d-icon-user"></i> &nbsp;
                                Login/Sign up
                            </a>
                        @endguest


                        <div class="dropdown">
                            <a href="#currency">USD</a>
                            <ul class="dropdown-box">
                                <li><a href="#USD">USD</a></li>
                            </ul>
                        </div>
                        <div class="dropdown ml-5">
                            @if (Config::get('app.locale') == 'en')
                                <span class="selected-language">
                                    English
                                </span>
                            @elseif(Config::get('app.locale') == 'ch-s')
                                <span class="selected-language">
                                    Chinese (Simplified)
                                </span>
                            @else
                                <span class="selected-language">
                                    Chinese (Traditional)
                                </span>
                            @endif
                            <ul class="dropdown-box">
                                <a class="dropdown-item " href="#" data-language="en">
                                    <i class="flag-icon flag-icon-us mr-50"></i>
                                    English</a>
                                <a class="dropdown-item " href="#"
                                    data-language="fr">
                                    <i class="flag-icon flag-icon-ch mr-50"></i>
                                    Chinese (Simplified)
                                </a>
                                <a class="dropdown-item" href="#"
                                    data-language="de">
                                    <i class="flag-icon flag-icon-ch mr-50"></i>
                                    Chinese (Traditional)
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End HeaderTop -->
            <div class="header-middle sticky-header fix-top sticky-content">
                <div class="container-fluid">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle mr-0">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <a href="#" class="logo d-none d-lg-block">
                            <img src="{{ asset('asset/image/logo.png') }}" alt="logo" class="img-responsive" />
                        </a>
                        <!-- End Logo -->
                    </div>
                    <div class="header-center d-flex justify-content-center">
                        <a href="#" class="logo d-block d-lg-none">
                            <img src="{{ asset('asset/image/logo.png') }}" alt="logo" width="154" height="43" />
                        </a>
                        <!-- End Logo -->
                    </div>
                    <div class="header-right">
                        <nav class="main-nav mr-4">
                            <ul class="menu menu-active-underline">
                                <li class="active">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li class="#">
                                    <a href="#">Promotion</a>
                                </li>
                                <li>
                                    <a href="#">Sales Performance</a>
                                    <ul>
                                        <li><a href="{{route ('MLM.direct_bonus.index')}}">Direct
                                                Bonus</a>
                                        </li>
                                        <li><a href="{{route ('MLM.matching_bonus.index')}}">Matching
                                                Bonus
                                                History</a></li>
                                        <li><a href="{{route ('MLM.leadership_bonus_details.index')}}">Leadership Bonus History</a></li>   
                                   </ul>
                              </li>
                                 <li>
                                    <a href="#">Member Center</a>
                                    <ul>
                                        <li><a href="#">Member
                                                Registration</a></li>
                                        <li><a href="{{ URL::signedRoute('MLM.withdrawform.index') }}">Cash Withdrawl (BW)</a></li>
                                        <li><a href="{{ URL::signedRoute('MLM.loyalitypoints_withdraw.index') }}">Loyality Points Wallet</a></li>
                                    </ul>
                                </li>                
                                <li><a href="{{URL::signedRoute('MLM.tree.index')}}">Genealogy</a>
                                </li>                                
                            </ul>
                        </nav>


                        <span class="divider mr-4"></span>

                    </div>
                </div>
            </div>
        </header>


        {{-- main data --}}
        @yield('content')
        {{-- end main data --}}









        <footer class="footer">
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="widget widget-about">
                                <a href="demo-beauty.html" class="logo-footer">
                                    <img src="{{ asset('asset/image/font/footer-logo.png') }}" alt="logo-footer"
                                        width="154" height="43">
                                </a>
                                <div class="widget-body">

                                </div>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="widget">
                                        <h4 class="widget-title">About Us</h4>
                                        <ul class="widget-body">
                                            <li>
                                                <a href="{{url('/')}}">About Us</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/contact')}}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Widget -->
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="widget">
                                        <h4 class="widget-title">Customer Service</h4>
                                        <ul class="widget-body">

                                            <li>
                                                <a href="#">Custom Service</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms &amp; Conditions</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Widget -->
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-0 widget">
                                        <h4 class="widget-title">My Account</h4>
                                        <ul class="widget-body">
                                            @if (!Auth::user())
                                                <li>
                                                    <a href="">Sign in</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="">My Profile</a>
                                                </li>
                                            @endif
                                            <li>
                                                <a href="">View Cart</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">My Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="">Track My Order</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Footer Middle -->
                <div class="footer-bottom">
                    <div class="footer-left">
                        <figure class="payment">
                            Powered By
                            <img src="{{ asset('asset/image/font/mctpay1.png') }}" alt="payment" width="159"
                                height="29">
                        </figure>
                    </div>
                    <div class="footer-center">
                        <p class="copyright">My Queen ?? 2021. All Rights Reserved. Developed By <a
                                href="https://bizzmanweb.sg/">Bizzmanweb</a></p>
                    </div>
                    <div class="footer-right">
                        <div class="social-links">
                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                            <a href="#" class="social-link social-youtube fab fa-youtube"></a>
                            <a href="#" class="social-link social-wechat fab fa-weixin"></a>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>

    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="{{ url('/about') }}">About</a>
                </li>

                <li>
                    <a href="#">Products</a>
                    <ul>
                        <li><a href="{{url('products')}}">MQ Freckle Essence</a></li>
                        <li><a href="{{url('products')}}">MQ Anti-Blue Light Exquisite Spray</a></li>
                        <li><a href="{{url('products')}}">Coconut Oil Amino Acid Facial Cleanser</a></li>
                        <li><a href="{{url('products')}}">MQ Avocado Neckline Repair Message Cream</a></li>
                        <li><a href="{{url('products')}}">MQ Medical Mask</a></li>

                    </ul>
                </li>


                <li>
                    <a href="{{url('/contact')}}">Contact </a>
                </li>

            </ul>
            <!-- End MobileMenu -->
        </div>
    </div>

    <script src="{{ asset('asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('asset/js/font/main.min.js') }}"></script>
    <script src="{{ asset('asset/alert/toastr.min.js') }}"></script>


    @yield('javascript')

</body>

</html>
