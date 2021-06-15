<?php $__env->startSection('page_title'); ?>
    <?php echo e(('Paravel | Dashboard ')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('home'); ?>
  active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dashboard_content'); ?>

 <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Dashboard </h5>
        <p>This is a Dashboard Page</p>

        <h2>
          <?php if(Auth::user()->role == 1): ?>
            Your Are Admin
          <?php else: ?>
            Your Are Customer
          <?php endif; ?>
        </h2>
      </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
 <!-- ########## END: MAIN PANEL ########## -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marshez\bookstore3\resources\views/home.blade.php ENDPATH**/ ?>