<?php $__env->startSection('page_title'); ?>
  <?php echo e(('Moltran | Login ')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('logreg_content'); ?>
  <div class="account-pages my-5">
             <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-md-8 col-lg-6 col-xl-5">
                         <div class="card mt-4">
                             <div class="card-header bg-img p-5 position-relative">
                                 <div class="bg-overlay"></div>
                                 <h4 class="text-white text-center mb-0">Sign In to Moltran</h4>
                             </div>
                             <div class="card-body p-4 mt-2">
                               <form method="POST" action="<?php echo e(route('login')); ?>" class="p-3">
                                 <?php echo csrf_field(); ?>

                                 <div class="form-group mb-3">
                                   <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required placeholder="Email Address">
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
                                         <div class="custom-control custom-checkbox">
                                             <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> class="custom-control-input">
                                             <label class="form-check-label" for="remember">
                                                 <?php echo e(__('Remember Me')); ?>

                                             </label>
                                         </div>
                                     </div>

                                     <div class="form-group text-center mt-5 mb-4">
                                         <button class="btn btn-primary waves-effect width-md waves-light" type="submit"> Log In </button>
                                     </div>

                                     <div class="form-group row mb-0">
                                         <div class="col-sm-7">
                                             <?php if(Route::has('password.request')): ?>
                                                 <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                                     <?php echo e(__('Forgot Your Password?')); ?>

                                                 </a>
                                             <?php endif; ?>
                                         </div>
                                         <div class="col-sm-5 text-right">
                                             <a href="<?php echo e(url('register')); ?>">Create an account</a>
                                         </div>
                                     </div>
                                 </form>

                                 <a href = "<?php echo e(url('login/facebook')); ?>" class="btn btn-primary btn-block"> <i class = "fab fa-facebook"></i> Login With Facebook</a>
                                 <a href = "<?php echo e(url('login/github')); ?>" class="btn btn-secondary btn-block"> <i class = "fab fa-github"></i> Login With Github</a>
                                 <a href = "<?php echo e(url('login/google')); ?>" class="btn btn-info btn-block"> <i class = "fab fa-google"></i> Login With Google</a>
                                 
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

<?php echo $__env->make('layouts.logreg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marshez\bookstore3\resources\views/auth/login.blade.php ENDPATH**/ ?>