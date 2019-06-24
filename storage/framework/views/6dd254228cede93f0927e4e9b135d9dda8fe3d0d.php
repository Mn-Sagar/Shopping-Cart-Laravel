<?php $__env->startSection('content'); ?>
<div class="row" >
 <div class="container-fluid">
    <div class="col-md-8 col-md-offset-2">

        <h1>User Profile</h1>
        <hr>
        <h2>My orders</h2>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="panel panel-default">
        	<div class="panel-body">
        		<ul class="list-group">
        			<?php $__currentLoopData = $order->cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        			<span class="badge">Tk-<?php echo e($item['price']); ?></span>
        			<?php echo e($item['item']['title']); ?> | <?php echo e($item['qty']); ?>Units
        		</li>
        		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</ul>
        	</div>
        	<div class="panel-footer">
        	<strong>Total Price: Tk-<?php echo e($order->cart->totalPrice); ?></strong>
        	</div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</div>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>