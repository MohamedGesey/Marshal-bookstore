<?php $__env->startSection('frontend_content'); ?>

  <!-- .breadcumb-area start -->
  <div class="breadcumb-area bg-img-4 ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcumb-wrap text-center">
            <h2>Cart Page</h2>
            <ul>
              <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li><span>Cart Details</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- .breadcumb-area end -->

  <!-- cart-area start -->
  <div class="cart-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
         
        

            <?php if(session()->has('update_status')): ?>
              <div class="alert alert-success alert-dismissible fade show text-success" role="alert">
                 <?php echo e(session()->get('update_status')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>

            <?php if(session()->has('delete_status')): ?>
              <div class="alert alert-danger alert-dismissible fade show text-danger" role="alert">
                 <?php echo e(session()->get('delete_status')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>

           

            <table class="table-responsive cart-wrap">
              <thead>
                <tr>
                  <th class="images">Image</th>
                  <th class="product">Product</th>
                  <th class="ptice">Price</th>
                  <th class="quantity">Quantity</th>
                  <th class="total">Total</th>
                  <th class="remove">Remove</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $sub_total = 0;
                ?>

                <?php $__empty_1 = true; $__currentLoopData = cart_items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                    <td class="images"><img src="<?php echo e(asset('uploads/book_photos')); ?>/<?php echo e($cart_item->product->cover_image); ?>" alt=""></td>
                    <td class="product">
                      <a href="single-product.html"><?php echo e($cart_item->product->book_name); ?></a>
                   
                    </td>
                    <td class="ptice">$<?php echo e($cart_item->product->book_price); ?></td>
                    <td class="quantity cart-plus-minus">
                      <input type="text" value="<?php echo e($cart_item->product_quantity); ?>"  name = "product_update[<?php echo e($cart_item->id); ?>]">
                    </td>

                    <td class="total">$<?php echo e($cart_item->product->book_price * $cart_item->product_quantity); ?></td>


                    <?php
                      $sub_total += $cart_item->product->book_price * $cart_item->product_quantity;
                    ?>
                    <td class="remove">
                      <a href="<?php echo e(route('cart.destroy',$cart_item->id)); ?>"><i class="fa fa-times"></i></a>
                    </td>
                  </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  <tr>
                    <td colspan="50">No Data</td>
                  </tr>
                <?php endif; ?>


              </tbody>
              
            </table>

            <table class="table-responsive cart-wrap">

              <thead>
                <tr>
                  <th class="total">SubTotal</th>
                  <th class="remove">
                     <li> Subtotal =  $ <?php echo e($sub_total); ?>.00</li>
                        <?php
                          session(['sub_total' => $sub_total ]);
                        ?>
                    </th>
                </tr>
              </thead>


            </table>

            <a href="<?php echo e(route('checkout')); ?>" class="btn btn-danger text-right mt-2">Checkout</a>

          </div>



        </div>
      </div>
    </div>
  </div>
  <!-- cart-area end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marshez\bookstore3\resources\views/frontend/cardview.blade.php ENDPATH**/ ?>