<?php $__env->startSection('page_title'); ?>
  <?php echo e(('Moltran | Registration ')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('logreg_content'); ?>
  <div class="account-pages my-5">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-md-8 col-lg-6 col-xl-5">
                       <div class="card mt-4">
                           <div class="card-header bg-img p-5 position-relative">
                               <div class="bg-overlay"></div>
                               <h4 class="text-white text-center mb-0">Create a new Account</h4>
                           </div>
                           <div class="card-body p-4 mt-2">
                                 <form method="POST" action="<?php echo e(route('register')); ?>" class="p-3">
                                     <?php echo csrf_field(); ?>

                                     <div class="form-group mb-3">
                                       <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required placeholder="Name">
                                         <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                           <span class="invalid-feedback" role="alert">
                                             <strong><?php echo e($message); ?></strong>
                                           </span>
                                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                       </div>

                                   <div class="form-group mb-3">
                                       <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required placeholder="Email">

                                       <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                           <span class="invalid-feedback" role="alert">
                                               <strong><?php echo e($message); ?></strong>
                                           </span>
                                       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   </div>

                                   <div class="form-group mb-3">
                                       <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required placeholder="Password">

                                       <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                           <span class="invalid-feedback" role="alert">
                                               <strong><?php echo e($message); ?></strong>
                                           </span>
                                       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   </div>

                                   <div class="form-group mb-3">
                                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                                   </div>


                                   <div class="form-group mb-3">
                                       <div class="custom-control custom-checkbox checkbox-primary">
                                           <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                           <label class="custom-control-label" for="checkbox-signin">I accept <a href="#">Terms and Conditions</a></label>
                                       </div>
                                   </div>

                                   <div class="form-group text-center mt-5 mb-4">
                                       <button class="btn btn-primary waves-effect width-md waves-light" type="submit"> Register </button>
                                   </div>

                                   <div class="form-group row mb-0">
                                       <div class="col-sm-12 text-center">
                                           <a href="<?php echo e(url('login')); ?>">Already have account?</a>
                                       </div>
                                   </div>
                               </form>

                           </div>
                           <!-- end card-body -->
                       </div>
                       <!-- end card -->

                       <!-- end row -->

                   </div>
                   <!-- end col -->
               </div>
               <!-- end row -->

           </div>
       </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.logreg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marshez\bookstore3\resources\views/auth/register.blade.php ENDPATH**/ ?>