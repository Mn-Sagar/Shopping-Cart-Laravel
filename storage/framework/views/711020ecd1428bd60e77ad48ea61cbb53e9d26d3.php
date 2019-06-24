<?php $__env->startSection('title'); ?>
Laravel E-commerce 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
		 <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-3">
		  <h1 align="center"><strong>Checkout</strong></h1>
		  <h4 align="center">Your Total Tk-<?php echo e($total); ?></h4>
		  	<form action="<?php echo e(route('checkout')); ?>" method="post" id="checkout-form">
		  	<div class="row">
		  		<div class="col-xs-12">
		            <div class="form-group">
		                <label for="name">Name</label>
		                <input type="text" id="name" name="name"  class="form-control" required>
		            </div>
	            </div>
	            <div class="col-xs-12">
		            <div class="form-group">
		                <label for="address">Address</label>
		                <input type="text" id="address" name="address"  class="form-control" required>
		            </div>
	            </div>
	            <div class="col-xs-12">
		            <div class="form-group">
		                <label for="email">Email</label>
		                <input type="text" id="email" name="email" class="form-control" required>
		            </div>
	            </div>
	            <div class="col-xs-12">
		            <div class="form-group">
		                <label for="mobile">Mobile Number</label>
		                <input type="text" id="mobile" name="mobile" class="form-control" required>
		            </div>
	            </div>
		            <div class="col-xs-12">
			             <div class="form-group">
			               <label for="bkash">Bkash Number</label>
			                <input type="text" id="bkash" name="bkash" class="form-control" required>
		            	</div>
	            	</div>
	             <?php echo e(csrf_field()); ?>

	             <div class="col-xs-12">
	            <button type="submit" class="btn btn-primary" >Buy Now </button> 
	            </div>  
	         </div>
             
          </form>
		 </div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>