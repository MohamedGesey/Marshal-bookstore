<?php $__env->startSection('page_title'); ?>
 <?php echo e(('Paravel | Product Add ')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('product'); ?>
 active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dashboard_content'); ?>
  <!-- ########## START: MAIN PANEL ########## -->
   <div class="sl-mainpanel">
     <nav class="breadcrumb sl-breadcrumb">
       <a class="breadcrumb-item" href="<?php echo e(url('home')); ?>">Home</a>
       <span class="breadcrumb-item active">Order</span>
     </nav>

     <div class="sl-pagebody">
       <div class="sl-page-title">
         <h5>Order Page</h5>
         <p>This is a Product Page</p>
       </div><!-- sl-page-title -->

       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">Order Page</h1>
           </div>
         </div>
           <div class="row">
              <div class="col-md-12">
                   <div class="card">
                       <div class="card-header">
                          <h2>Order View</h2>
                          <hr>
                         
                       </div>
                       <div class="card-body">
                         <?php if(session()->has('trash_status')): ?>
                           <div class="alert alert-warning alert-dismissible fade show text-danger" role="alert">
                              <?php echo e(session()->get('trash_status')); ?>

                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                         <?php endif; ?>
                         <?php if(session()->has('delete_sms')): ?>
                           <div class="alert alert-warning alert-dismissible fade show text-danger" role="alert">
                              <?php echo e(session()->get('delete_sms')); ?>

                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                         <?php endif; ?>

                             <table class="table table-dark" id = "data_tables">
                               <thead>
                                 <tr>
                                    <th scope="col">SL No.</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Book ID</th>
                                    <th scope="col">Book Quantity</th>
                                    <th scope="col">Action</th>
                                 </tr>
                               </thead>

                               <tbody>
                                 <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                 <tr>
                                   <td><?php echo e($loop->index + 1); ?></td>
                                   <td><?php echo e($order->generator_cart_id); ?></td>
                                   <td><?php echo e($order->product_id); ?></td>
                                   <td><?php echo e($order->product_quantity); ?></td>

                                   <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      <a href = "<?php echo e(route('order.delete' , $order->id)); ?>" type="button" class="btn btn-danger">Delete</a>
                                     
                                    </div>
                                  </td>


                                 </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                   <tr>
                                     <td class = "text-danger text-center" colspan="50">No Data Available</td>
                                   </tr>
                               <?php endif; ?>

                               </tbody>
                             </table>

                       </div>
                   </div>
              </div>

            

           </div>
       </div>

     </div><!-- sl-pagebody -->
   </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marshez\bookstore3\resources\views/backend/order/index.blade.php ENDPATH**/ ?>