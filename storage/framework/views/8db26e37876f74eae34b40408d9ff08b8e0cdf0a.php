<?php $__env->startSection('frontend_content'); ?>

    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Checkout</h2>
                        <ul>
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li><span>Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- checkout-area start -->
    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="row">

                
                <div class="col-lg-4">
                    <div class="order-area">
                        <form action="<?php echo e(route('checkoutpost')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                        <h3>Your Order</h3>
                        <ul class="total-cost">
                            <?php $__currentLoopData = cart_items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li> <?php echo e($cart_item->product->book_name); ?> X <?php echo e($cart_item->product_quantity); ?> <span class="pull-right">$ <?php echo e($cart_item->product->book_price * $cart_item->product_quantity); ?>.00</span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <li>Subtotal <span class="pull-right"><strong>$ <?php echo e(session('sub_total')); ?></strong></span></li>
                            <li>Discount Amount (%) <span class="pull-right"> -- </span></li>
                            <li>Total<span class="pull-right">$ <?php echo e(session('sub_total')); ?></span></li>
                        </ul>
                        <ul class="payment-method">
                           
                            <li>
                                <input value = "2" name = "payment_option" id="card" type="radio">
                                <label for="card">Credit Card</label>
                            </li>
                        </ul>
                        <button type="submit">Place Order</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marshez\bookstore3\resources\views/frontend/checkout.blade.php ENDPATH**/ ?>