@extends('frontend.layouts.master')
@section('title','Myqueen | Profile')
@section('body')
<main class="main">
            <div class="page-content">
                <section class="intro-section">
                    <div class="owl-carousel owl-theme row owl-nav-fade intro-slider animation-slider cols-1 gutter-no"
                        data-owl-options="{
                        'nav': false,
                        'dots': false,
                        'loop': false,
                        'items': 1,
                        'autoplay': false,
                        'autoplayTimeout': 8000,
                        'responsive': {
                            '992': {
                                'nav': true
                            }
                        }
                    }">
                        <div class="intro-slide1 banner banner-fixed" style="background-color: #f6f6f6;">
                            <figure>
                                <img src="images/slider-2.jpg" alt="intro-banner" width="1903"
                                    height="530" style="background-color: #f6f6f6;" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50">
                                    <h4 class="banner-subtitle mb-4 slide-animate"
                                        data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                                        New Arrival
                                    </h4>
                                    <h2 class="banner-title slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Organic Cosmetics That Provide<br />Youth and Beauty</h2>
                                    <a href="{{url('products')}}" class="btn btn-dark btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner banner-fixed intro-slide2" style="background-color: #f6f6f6;">
                            <figure>
                                <img src="images/slider-1.jpg" alt="intro-banner" width="1903"
                                    height="530" style="background-color: #f6f6f6;" />
                            </figure>
                            <div class="container">
                                <div class="banner-content text-right y-50">
                                    <h4 class="banner-subtitle mb-4 ls-normal slide-animate"
                                        data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                                        Best Seller
                                    </h4>
                                    <h2 class="banner-title slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        The Best Cosmetics <br /> for Your Hair and Skin</h2>
                                    <a href="{{url('products')}}" class="btn btn-dark btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="service-section mt-6">
                    <div class="container appear-animate">
                        <div class="service-list">
                            <div class="service-carousel owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1"
                                data-owl-options="{
                                    'items': 3,
                                    'nav': false,
                                    'dots': false,
                                    'loop': true,
                                    'autoplay': false,
                                    'autoplayTimeout': 5000,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '576': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3,
                                            'loop': false
                                        }
                                    }
                                }">
                                <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.3s'
                                    }">
                                    <i class="icon-box-icon d-icon-truck" style="font-size: 46px;"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Free Shipping &amp;
                                            Return
                                        </h4>
                                        <p class="mb-0">Free shipping on orders over $99</p>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.4s'
                                    }">
                                    <i class="icon-box-icon d-icon-service"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Customer Support 24/7
                                        </h4>
                                        <p class="mb-0">Instant access to perfect support</p>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.5s'
                                    }">
                                    <i class="icon-box-icon d-icon-secure"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">100% Secure Payment
                                        </h4>
                                        <p class="mb-0">We ensure secure payment!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

    </div>

    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="about-us.html">About</a>
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
                    <a href="contact-us.html">Contact </a>
                </li>
                
            </ul>
        </div>
    </div>

    <div class="newsletter-popup mfp-hide" id="newsletter-popup" style="background-image: url(images/newsletter-popup.jpg)">
        <div class="newsletter-content">
            <h4 class="text-uppercase text-dark">Up to <span class="text-primary">20% Off</span></h4>
            <h2 class="font-weight-semi-bold">Sign up to <span>MYQUEEN</span></h2>
            <p class="text-grey">Subscribe to the Riode eCommerce newsletter to receive timely updates from your favorite
                products.</p>
            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="email" class="form-control email" name="email" id="email2" placeholder="Email address here..."
                    required="">
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>
            <div class="form-checkbox justify-content-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                    required />
                <label for="hide-newsletter-popup">Don't show this popup again</label>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 mt-10 appear-animate"
                    data-animation-options="{'name': 'fadeIn', 'delay': '.3s'}">
                    <h2 class="title title-underline text-center mb-7">Popular Categories</h2>
                    <div class="row gutter-md ">
                        <div class="col-md-4">
                            <div class="height-x1 w-2">
                                <div class="category category-banner category-absolute overlay-dark">
                                    <a href="{{url('products')}}">
                                        <figure class="category-media">
                                            <img src="images/product-banner/MQ精华液 MQ Freckles Essence.jpg" alt="category" width="480"
                                                height="250" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">MQ Freckle Essence
                                        </h4>
                                        <span class="category-count">
                                            Singapore MYQUEEN 
                                        </span>
                                        <a href="{{url('products')}}" class="btn btn-underline btn-link">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="height-x1 w-2">
                                <div class="category category-banner category-absolute overlay-dark">
                                    <a href="{{url('products')}}">
                                        <figure class="category-media">
                                            <img src="images/product-banner/抗蓝光喷雾-MQ-anti-blue-light-exquisite-spray.jpg" alt="category" width="480"
                                                height="250" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">MQ anti-blue light <br> exquisite spray 
                                        </h4>
                                        <span class="category-count">
                                            Singapore MYQUEEN 
                                        </span>
                                        <a href="{{url('products')}}" class="btn btn-underline btn-link">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
               
                        <div class="col-md-4">
                            <div class="height-x1 w-2">
                                <div class="category category-banner category-absolute overlay-dark">
                                    <a href="{{url('products')}}">
                                        <figure class="category-media">
                                            <img src="images/product-banner/洗面奶 MQ Coconut Oil Amino Acid Facial Cleanser.jpg" alt="category" width="480"
                                                height="250" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">Coconut Oil Amino Acid <br> Facial Cleanser
                                        </h4>
                                        <span class="category-count">
                                            Singapore MYQUEEN 

                                        </span>
                                        <a href="{{url('products')}}" class="btn btn-underline btn-link">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"></div>
                        
                        <div class="col-md-4">
                            <div class="height-x1 w-2">
                                <div class="category category-banner category-absolute overlay-dark">
                                    <a href="{{url('products')}}">
                                        <figure class="category-media">
                                            <img src="images/product-banner/牛油果颈霜 MQ Avocado Neckline Repair Massage Cream.jpg" alt="category" width="480"
                                                height="250" />
                                        </figure>
                                    </a>
                                    <div class="category-content" style="color: #fff;">
                                        <h4 class="category-name">MQ Avocado Neckline  Repair <br> Massage Cream
                                        </h4>
                                        <span class="category-count">
                                            Singapore MY QUEEN brand
                                        </span>
                                        <a href="{{url('products')}}" class="btn btn-underline btn-link">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-md-4">
                            <div class="height-x1 w-2">
                                <div class="category category-banner category-absolute overlay-dark">
                                    <a href="{{url('products')}}">
                                        <figure class="category-media">
                                            <img src="images/product-banner/黑白面膜-MQ-Medical-Mask.jpg" alt="category" width="480"
                                                height="250" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">MQ Medical Mask
                                        </h4>
                                        <span class="category-count">
                                            Vegetal Collagen Mask

                                        </span>
                                       
                                        <a href="{{url('products')}}" class="btn btn-underline btn-link">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <!-- product carousel -->

                <div class="container pt-6 mt-10 text-center appear-animate"
                    data-animation-options="{'name': 'fadeIn', 'delay': '.3s'}">
                    <h2 class="title title-underline text-center">Our Products</h2>
                    <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2 mb-5" data-owl-options="{
                            'items': 4,
                            'nav': false,
                            'dots': false,
                            'margin': 20,
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 3
                                },
                                '992': {
                                    'items': 5
                                }
                            }
                        }">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="{{url('products')}}">
                                    <img src="images/product/MQ精华液-MQ-Freckles-Essence/MQ精华液-MQ-Freckles-Essence.jpg" alt="product" width="300"
                                        height="338">
                                        <!-- <img src="images/product/MQ精华液-MQ-Freckles-Essence/MQ精华液-MQ-Freckles-Essence.jpg" alt="product" width="300"
                                        height="338"> -->
                                </a>
                                <!-- <div class="product-label-group">
                                    <span class="product-label label-sale">27% off</span>
                                </div> -->
                                <div class="product-action-vertical">
                                    <a href="{{url('products')}}" class="btn-product-icon btn-cart" title="Select Options">
                                        <i class="d-icon-bag"></i>
                                    </a>
                                    <a href="{{url('products')}}" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="{{url('products')}}" class="btn-product btn-quickview" title="Quick View">Quick
                                        View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="{{url('products')}}">MQ Freckle Essence</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$88 (30ml)</ins> <br>
                                    <ins class="new-price">$166 (Retail Price)</ins>
                                    
                                    <!-- <del class="old-price">$210.00</del> -->
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:70%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">( 3 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="images/product/抗蓝光喷雾-MQ-anti-blue-light-exquisite-spray/抗蓝光喷雾-MQ-anti-blue-light-exquisite-spray.jpg" alt="product" width="300"
                                        height="338">
                                        <!-- <img src="images/product/抗蓝光喷雾-MQ-anti-blue-light-exquisite-spray/抗蓝光喷雾-MQ-anti-blue-light-exquisite-spray.jpg" alt="product" width="300"
                                        height="338"> -->
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart">
                                        <i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                        View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="#">MQ anti-blue light exquisite spray 
                                    </a>
                                </h3>
                                <div class="product-price">
                                    <span class="price"> $88 (100ml)</span> <br>
                                    <ins class="new-price">$166 (Retail Price)</ins>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:80%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">( 1 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="images/product/洗面奶-MQ-Coconut-Oil-Amino-Acid-Facial-Cleanser/洗面奶-MQ-Coconut-Oil-Amino-Acid-Facial-Cleanser.jpg" alt="product" width="300"
                                        height="338">
                                        <!-- <img src="images/product/洗面奶-MQ-Coconut-Oil-Amino-Acid-Facial-Cleanser/洗面奶-MQ-Coconut-Oil-Amino-Acid-Facial-Cleanser.jpg" alt="product" width="300"
                                        height="338"> -->
                                    
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart">
                                        <i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                        View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="#">Coconut Oil Amino Acid Facial Cleanser
                                    </a>
                                </h3>
                                <div class="product-price">
                                    <span class="price"> $88 (120ml)</span> <br>
                                    <ins class="new-price">$166 (Retail Price)</ins>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:80%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">( 3 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="images/product/牛油果颈霜-MQ-Avocado-Neckline-Repair-Massage-Cream/牛油果颈霜-MQ-Avocado-Neckline-Repair-Massage-Cream.jpg" alt="product" width="300"
                                        height="338">
                                        <!-- <img src="images/product/牛油果颈霜-MQ-Avocado-Neckline-Repair-Massage-Cream/牛油果颈霜-MQ-Avocado-Neckline-Repair-Massage-Cream.jpg" alt="product" width="300"
                                        height="338"> -->
                                </a>
 
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" title="Select Options">
                                        <i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                        View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="#">American Woman Lipstick</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$88 (120ml)</ins> <br>
                                    <ins class="new-price">$166 (Retail Price)</ins>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="images/product/黑白面膜-MQ-Medical-Mask/黑白面膜-MQ-Medical-Mask.jpg" alt="Product"width="300"
                                    height="338">
                                    <!-- <img src="images/product/黑白面膜-MQ-Medical-Mask/黑白面膜-MQ-Medical-Mask.jpg" alt="Product"width="300"
                                    height="338"> -->
                                </a>
 
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" title="Select Options">
                                        <i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                        View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="#">American Woman Lipstick</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$88 (5pcs)</ins> <br>
                                    <ins class="new-price">$166 (Retail Price)</ins>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="# class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('products')}}" class="btn btn-outline btn-rounded btn-dark mb-4">View All
                        Products</a>
                </div>
                <!-- this is referal section-->
                <section class="banner parallax mt-10 appear-animate" style="background-color: #1d1e20; background-size: cover;"
                data-parallax-options="{'speed':2.5,'parallaxHeight':'150%','offset':-30}"
                data-image-src="images/refferal.jpg">
                <div class="container">
                    <div class="banner-content appear-animate" data-animation-options="{
                        'name': 'blurIn'
                    }">
                        <h4 class="banner-subtitle text-uppercase text-primary slide-animate"
                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                            This is for Referal banner
                        </h4>
                        <h2 class="banner-title slide-animate font-weight-bold"
                            data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                            This is for Referal banner</h2>
                        <a href="demo-beauty-shop.html"
                            class="btn btn-white btn-icon-right btn-rounded slide-animate"
                            data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Refer
                            Now<i class="d-icon-arrow-right"></i></a>
                    </div>
                </div>
            </section>
@endsection