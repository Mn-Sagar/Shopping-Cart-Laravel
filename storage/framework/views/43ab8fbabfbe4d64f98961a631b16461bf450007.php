<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $__env->yieldContent('title'); ?></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo e(URL:: to('src/css/app.css')); ?>">

	<?php echo $__env->yieldContent('styles'); ?>
</head>

<body>
<?php echo $__env->make('partials.AdminHeader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div style="height:500px">
<?php echo $__env->yieldContent('content'); ?>
</div>
<script
  src="http://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php echo $__env->yieldContent('scripts'); ?>
<div class="row">

</div>
</body>
</html>
<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>