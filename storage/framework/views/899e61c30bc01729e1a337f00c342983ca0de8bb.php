<?php $__env->startSection('page_title'); ?>
 <?php echo e(('Dashboard | Book Add ')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('book'); ?>
 active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dashboard_content'); ?>
  <!-- ########## START: MAIN PANEL ########## -->
   <div class="sl-mainpanel">
     <nav class="breadcrumb sl-breadcrumb">
       <a class="breadcrumb-item" href="<?php echo e(url('home')); ?>">Home</a>
       <span class="breadcrumb-item active">Book</span>
     </nav>

     <div class="sl-pagebody">
       <div class="sl-page-title">
         <h5>Book Page</h5>
         <p>This is a Book Page</p>
       </div><!-- sl-page-title -->

       <div class="container-fluid">
         <div class="row justify-content-center">
           <div class="col-md-8">
              <h1 class = "text-center my-3">Book Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "<?php echo e(route('book.viewall')); ?>" type="button" class="btn btn-primary">All Book</a>
    
              </div>

           </div>

         </div>
           <div class="row justify-content-center">

              <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       <h2>Book Add</h2>
                    </div>
                    <div class="card-body">

                      <form method="post" action = "<?php echo e(route('book.store')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <?php if(session()->has('success_status')): ?>
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                             <?php echo e(session()->get('success_status')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php endif; ?>

                        <?php if(session()->has('success_message')): ?>
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                             <?php echo e(session()->get('success_message')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php endif; ?>



                        <div class="form-group">
                          <label>Book Name</label>
                          <input type="text" class="form-control" placeholder="Book Name" name = "book_name" value = "<?php echo e(old('book_name')); ?>">
                          <?php $__errorArgs = ['book_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class = "text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                          <label>Book Price</label>
                          <input type="number" class="form-control" placeholder="Book Price" name = "book_price" value = "<?php echo e(old('book_price')); ?>">
                          <?php $__errorArgs = ['book_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class = "text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                          <label>Description</label>
                          <textarea name="description" rows="2" class="form-control" placeholder="Description"><?php echo e(old('description')); ?></textarea>
                          <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class = "text-danger"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                          <label>Cover Photo</label>
                          <input type="file" class="form-control" name="cover_image">
                        </div>

                        <button type="submit" class="btn btn-primary">Add Book</button>
                      </form>

                    </div>
               </div>
              </div>

           </div>
       </div>

     </div><!-- sl-pagebody -->
   </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marshez\bookstore3\resources\views/backend/product/index.blade.php ENDPATH**/ ?>