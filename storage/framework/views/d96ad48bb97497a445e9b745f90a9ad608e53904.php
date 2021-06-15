<?php $__env->startSection('frontend_content'); ?>
  <!-- .breadcumb-area start -->
      <div class="breadcumb-area bg-img-4 ptb-100">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="breadcumb-wrap text-center">
                          <h2>Book Details</h2>
                          <ul>
                              <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                              <li><span>Book Details</span></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- .breadcumb-area end -->

<!-- single-product-area start-->
<div class="single-product-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-single-img">
                  <div class="product-active owl-carousel">
                    <div class="item">
                      <img src="<?php echo e(asset('uploads/book_photos')); ?>/<?php echo e($actvie_product->cover_image); ?>" alt="">
                    </div>

                  
                      <div class="item">
                        <img src="<?php echo e(asset('uploads/book_photos')); ?>/<?php echo e($actvie_product->cover_image); ?>" alt="">
                      </div>

                      <div class="item">
                        <img src="<?php echo e(asset('uploads/book_photos')); ?>/<?php echo e($actvie_product->cover_image); ?>" alt="">
                      </div>

                      <div class="item">
                        <img src="<?php echo e(asset('uploads/book_photos')); ?>/<?php echo e($actvie_product->cover_image); ?>" alt="">
                      </div>

                   
                  </div>
                    <div class="product-thumbnil-active  owl-carousel">
                        <div class="item">
                          <img src="<?php echo e(asset('uploads/book_photos')); ?>/<?php echo e($actvie_product->cover_image); ?>" alt="">
                        </div>
                       
                          <div class="item">
                            <img src="<?php echo e(asset('uploads/book_photos')); ?>/<?php echo e($actvie_product->cover_image); ?>" alt="">
                          </div>
                      

                    </div>
                </div>
            </div>
            

            <div class="col-lg-6">
                <div class="product-single-content">
                    <h3><?php echo e($actvie_product->book_name); ?></h3>
                    <div class="rating-wrap fix">
                        <span class="pull-left">$<?php echo e($actvie_product->book_price); ?></span>
                        <ul class="rating pull-right">

                        </ul>
                    </div>
                    <p><?php echo e($actvie_product->description); ?></p>
                    <ul class="input-style">

                      <form action="<?php echo e(route('cart.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value = "<?php echo e($actvie_product->id); ?>" name = "product_id">
                        <li class="quantity cart-plus-minus">
                          <input type="text" value="1" name = "product_quantity">
                        </li>
                        <li>
                          <button type="submit" class = "btn btn-danger">Add to Cart</button>
                        </li>
                      </form>

                    </ul>
                  
                </div>
            </div>
        </div>
      
    </div>
</div>
<!-- single-product-area end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marshez\bookstore3\resources\views/frontend/productdetails.blade.php ENDPATH**/ ?>