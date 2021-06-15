<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from themepresss.com/tf/html/tohoney/ by HTTrack Website Copier/3.x  -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Marshal bookstore</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/bootstrap.min.css">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/owl.carousel.min.css">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/font-awesome.min.css">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/flaticon.css">
    <!-- jquery-ui.css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/jquery-ui.css">
    <!-- metisMenu.min.css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/metisMenu.min.css">
    <!-- swiper.min.css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/swiper.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/styles.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/responsive.css">
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- modernizr css -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/vendor/modernizr-2.8.3.min.js"></script>


</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!--Start Preloader-->
    <div class="preloader-wrap">
        <div class="spinner"></div>
    </div>
    <!-- search-form here -->
    <div class="search-area flex-style">
        <span class="closebar">Close</span>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-12">
                    <div class="search-form">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-form here -->
    <!-- header-area start -->
    <header class="header-area">
        <div class="header-top bg-2">
            <div class="fluid-container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <ul class="d-flex header-contact">
                            
                        </ul>
                    </div>
                    <div class="col-md-6 col-12">
                        <ul class="d-flex account_login-area">
                            <li>
                                
                                <?php if(auth()->guard()->check()): ?>    
                                    <a href="javascript:void(0);"><i class="fa fa-user"></i>
                                    <?php echo e(Auth::user()->name); ?> 
                                    <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown_style">

                                        <li><a href="<?php echo e(route('home')); ?>">Dashboard</a></li>

                                      


                                        <li>
                                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="sl-menu-link">
                                                <div class="sl-menu-item">
                                                  <i class="mdi mdi-power"></i>
                                                  <span class="menu-item-label">Logout</span>
                                                </div><!-- menu-item -->
                                              </a><!-- sl-menu-link -->
                                              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                <?php echo csrf_field(); ?>
                                              </form>
                                        </li>


                                    </ul>
                                <?php endif; ?>

                                <?php if(auth()->guard()->guest()): ?>
                                    <li><a href="<?php echo e(route('loginregistration')); ?>"> Login/Register </a></li>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="fluid-container">
                <div class="row">
                    <div class="col-lg-3 col-md-7 col-sm-6 col-6">
                        <div class="logo">
                        <a href="<?php echo e('/'); ?>">
                           
                           <h2>Marshal bookstore</h2>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-7 d-none d-lg-block">
                        <nav class="mainmenu">
                            <ul class="d-flex">
                                <li>
                                    <a href="<?php echo e(url('/')); ?>">Home</a>
                                </li>
                                <li><a href="<?php echo e(route('about')); ?>">About </a></li>
                                <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-2 col-sm-5 col-4">
                        <ul class="search-cart-wrapper d-flex">
                            <li class="search-tigger"><a href="javascript:void(0);"><i class="flaticon-search"></i></a></li>

                           

                            <li>
                                <a href="javascript:void(0);"><i class="flaticon-shop"></i> <span><?php echo e(total_count_cart()); ?></span></a>
                                <ul class="cart-wrap dropdown_style">
                                  <?php
                                    $sub_total = 0;
                                  ?>
                                  <?php $__empty_1 = true; $__currentLoopData = cart_items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <li class="cart-items">
                                        <div class="cart-img">
                                            <img src="<?php echo e(asset('uploads/book_photos')); ?>/<?php echo e($cart_item->product->cover_image); ?>" alt="" width="50">
                                        </div>
                                        <div class="cart-content">
                                            <a href="<?php echo e(route('productdetails' , $cart_item->product->slug)); ?>"><?php echo e($cart_item->product->book_name); ?></a>
                                            <span>QTY : <?php echo e($cart_item->product_quantity); ?></span>
                                            <p>$<?php echo e($cart_item->product_quantity * $cart_item->product->book_price); ?></p>
                                            <?php
                                              $sub_total += $cart_item->product_quantity * $cart_item->product->book_price;
                                            ?>

                                            <a href="<?php echo e(route('cart.destroy',$cart_item->id)); ?>">
                                                <i class="fa fa-times"></i>
                                            </a>

                                           
                                        </div>
                                      </li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <li>You Have No Cart add product</li>
                                  <?php endif; ?>
                                    <li>Subtotol: <span class="pull-right">$<?php echo e($sub_total); ?>.00</span></li>
                                    <li>
                                        <a href = " <?php echo e(route('card.index')); ?>" class = "btn btn-danger">Go To Cart Page</a>
                                    </li>

                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 col-2 d-block d-lg-none">
                        <div class="responsive-menu-tigger">
                            <a href="javascript:void(0);">
                        <span class="first"></span>
                        <span class="second"></span>
                        <span class="third"></span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->

    <?php echo $__env->yieldContent('frontend_content'); ?>


   
    <!-- .footer-area start -->
    <div class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="footer-top-item">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="footer-top-text text-center">
                                <ul>

                                    <li>
                                        <a href="<?php echo e(url('/')); ?>">Home</a>
                                    </li>
                                    <li><a href="<?php echo e(route('about')); ?>">About </a></li>
                                    <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="footer-icon">
                            <ul class="d-flex">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-12">
                        <div class="footer-content">
                            <p>Some Description</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-8 col-sm-12">
                        <div class="footer-adress">
                            <ul>
                                <li><a href="#"><span>Email:</span> ammartaufiq.a@gmail.com</a></li>
                                <li><a href="#"><span>Tel:</span> +60 11 3960 3417</a></li>
                                <li><a href="#"><span>Adress:</span> IIUM - BILAL , MALAYSIA</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="footer-reserved">
                            <ul>
                                <li>Copyright © 2021 All rights reserved to Marshal Bookstore.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer-area end -->
   
    <!-- Modal area start -->
    <!-- jquery latest version -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/bootstrap.min.js"></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/owl.carousel.min.js"></script>
    <!-- scrollup.js -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/scrollup.js"></script>
    <!-- isotope.pkgd.min.js -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min.js -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/imagesloaded.pkgd.min.js"></script>
    <!-- jquery.zoom.min.js -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/jquery.zoom.min.js"></script>
    <!-- countdown.js -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/countdown.js"></script>
    <!-- swiper.min.js -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/swiper.min.js"></script>
    <!-- metisMenu.min.js -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/metisMenu.min.js"></script>
    <!-- mailchimp.js -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/mailchimp.js"></script>
    <!-- jquery-ui.min.js -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- main js -->
    <script src="<?php echo e(asset('frontend_assets')); ?>/js/scripts.js"></script>
    <?php echo $__env->yieldContent('footer_scripts'); ?>

</body>


<!-- Mirrored from themepresss.com/tf/html/tohoney/ by HTTrack Website Copier/3.x  -->
</html>
<?php /**PATH C:\Users\marshez\bookstore3\resources\views/layouts/frontend_app.blade.php ENDPATH**/ ?>