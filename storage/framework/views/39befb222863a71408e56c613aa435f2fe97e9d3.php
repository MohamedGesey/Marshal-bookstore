<?php $__env->startSection('page_title'); ?>
 <?php echo e(('Paravel | Book Add ')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('Book'); ?>
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
         <div class="row">
           <div class="col-md-12">
              <h1 class = "text-center my-3">Book Page</h1>

              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <a href = "<?php echo e(route('book.index')); ?>" type="button" class="btn btn-success">Add Book</a>
              </div>


           </div>
         </div>
           <div class="row">
              <div class="col-md-12">
                   <div class="card">
                       <div class="card-header">
                          <h2>Book View</h2>
                          <hr>
                         <h4>Total Book : <?php echo e($total_books); ?></h4>
                       </div>
                       <div class="card-body">
                         <?php if(session()->has('delete_message')): ?>
                           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <?php echo e(session()->get('delete_message')); ?>

                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                         <?php endif; ?>

                         <?php if(session()->has('mark_trash')): ?>
                         <div class="alert alert-warning alert-dismissible fade show text-danger" role="alert">
                            <?php echo e(session()->get('mark_trash')); ?>

                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                       <?php endif; ?>

                         
                      
                          <table class="table table-dark" id = "data_tables">
                            <thead>
                              <tr>

                                <th>SL No.</th>
                                <th>Book Name</th>
                        
                                <th>Book Price</th>
                                <th>Description</th>
                                <th>Book Photo</th>
                                <th>Action</th>
                              </tr>
                            </thead>

                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $books_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                              <tr>

                              
                                <td><?php echo e($loop->index + 1); ?></td>
                                <td><?php echo e(Str::limit($book->book_name , 15)); ?></td>
                               
                                <td><?php echo e($book->book_price); ?></td>
                                <td><?php echo e(Str::limit($book->description , 20)); ?></td>
                                <td>
                                  <img src="<?php echo e(asset('uploads/book_photos')); ?>/<?php echo e($book->cover_image); ?>" alt="" width="100">
                                </td>
                                <td>
                                  <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href = "<?php echo e(route('book.edit' , $book->id)); ?>" type="button" class="btn btn-primary">Edit</a>
                                    <form action="<?php echo e(route('book.destroy' , $book->id)); ?>" method="post">
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('DELETE'); ?>
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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

<?php $__env->startSection('footer_scripts'); ?>

<script>
// $(document).ready(function() {
//     $('#data_tables').DataTable();
// } );
$(document).ready(function() {
    $('#data_tables').DataTable( {
        "scrollY":        "400px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marshez\bookstore3\resources\views/backend/product/show.blade.php ENDPATH**/ ?>