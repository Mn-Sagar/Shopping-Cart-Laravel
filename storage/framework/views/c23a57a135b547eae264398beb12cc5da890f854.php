<?php $__env->startSection('title'); ?>
Laravel E-commerce 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<?php if(Session::has('cart')): ?>
	<div class="row">
		  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-3">
		  	<ul class="list-group">
		  	<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		  		<li class="list-group-item">
		  		<span class="badge"><?php echo e($product['qty']); ?></span>
		  		<strong><?php echo e($product['item']['title']); ?></strong>
		  		<span class="label label-success"><?php echo e($product['price']); ?></span>
		  		<div class="btn-group">
		  			<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
		  			<ul class="dropdown-menu">
		  			<li><a href="<?php echo e(route('product.reduceByOne',['id'=>$product['item']['id']])); ?>">Reduce By 1</a></li>
		  			<li><a href="<?php echo e(route('product.remove',['id'=>$product['item']['id']])); ?>">Reduce By All</a></li>
		  			</ul>
		  		</div>
		  		</li>
		  	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		  	</ul>

		  </div>
	</div>

	<div class="row">
		  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-3">
		  	<strong>Total: <?php echo e($totalPrice); ?></strong>
		  </div>
	</div>

	<hr>
	<div class="row">
		  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-3">
		  	<a href="<?php echo e(route('checkout')); ?>" type="button" class="btn btn-success">Checkout</a>
		  </div>
	</div>

	<?php else: ?>
	<div class="row">
		  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-3">
		  	<h2 class="text-center"><strong>No items in Cart !!</strong></h2>
		  </div>
	</div>

	<?php endif; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>