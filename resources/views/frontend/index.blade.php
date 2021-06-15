@extends('layouts.frontend_app')

@section('frontend_content')
      <!-- slider-area start -->
      <div class="slider-area">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide overlay">
                    <div class="single-slider slide-inner slide-inner1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <div class="slider-shape">
                                            <h2 data-swiper-parallax="-500">Amazing Book Store</h2>
                                            <p data-swiper-parallax="-400">Docufiction (or docu-fiction), often confused with docudrama, is the cinematographic combination of documentary and fiction, this term often meaning narrative film.                                            </p>
                                            <a href="shop.html" data-swiper-parallax="-300">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-inner7">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <div class="slider-shape">
                                            <h2 data-swiper-parallax="-500">Buying Book</h2>
                                            <p data-swiper-parallax="-400">A non-fiction novel and a documentary novel are appropriate to describe works that are read like novels</p>
                                            <a href="shop.html" data-swiper-parallax="-300">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- slider-area end -->

    <!-- product-area start -->
    <div class="product-area">
        <div class="fluid-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Latest Books</h2>  
                        <img src="{{ asset('frontend_assets') }}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            <ul class="row">
              @foreach ($books_all as $product)
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <a href="{{ route('productdetails' , $product->slug) }}">

                                <img src="{{ asset('uploads/book_photos') }}/{{ $product->cover_image }}" alt="">
                            </a>
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a href="{{ route('productdetails' , $product->slug) }}"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{ route('productdetails' , $product->slug) }}">{{ $product->book_name }}</a></h3>
                            <p class="pull-left">$ {{ $product->book_price }}
                            </p>
                            <ul class="pull-right d-flex">
                            </ul>
                        </div>
                    </div>
                </li>
              @endforeach
            </ul>
        </div>
    </div>
    <!-- product-area end -->
@endsection
