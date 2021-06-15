@extends('layouts.frontend_app')

@section('frontend_content')
  <!-- .breadcumb-area start -->
  <div class="breadcumb-area bg-img-4 ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcumb-wrap text-center">
            <h2>About Us</h2>
            <ul>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><span>About</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- .breadcumb-area end -->

   <!-- about-area start -->
    <div class="about-area ptb-50 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-wrap text-center">
                        <h3>Welcome to Marshal Bookstore! </h3>
                        <p>Marshal Bookstore is a leading book retailer, offering great books at affordable prices. We deliver books to online customers worldwide from our fulfilment centre in our home country of Malaysia, where we also operate a chain of major book stores. What is more, we offer our customers discounts of up to 80% off the recommended retail price on the majority of the books that we stock. </p>
                        <p>All our books are new. Many of them are printed specially for us, others are overstock or remaindered books. These originate from publishers who have printed too many copies of a new title, sent them for sale at regular book stores, and then had them returned by retailers when sales start to slow. The publisher is then faced with a choice: to destroy the books or resell them at a discount. This is how we obtain so many books at such good prices, enabling us in turn to pass these savings on to our customers. The books are sometimes marked on their base with a black pen to indicate their status, but they are all nonetheless essentially brand new.</p>
                        <p class="mb-0">We recommend customers buy immediately any book on our website that is of interest to them. In many cases, once a book sells out, we may never have it in stock again!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area end -->

@endsection
