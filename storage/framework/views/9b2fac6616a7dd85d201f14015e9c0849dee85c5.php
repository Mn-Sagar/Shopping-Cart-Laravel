<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home">ONLINE SHOP</a>
    </div>

   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo e(route('product.shoppingCart')); ?>"><i class="glyphicon glyphicon-shopping-cart"></i> Shopping cart
        <span class="badge"><?php echo e(Session::has('cart') ? Session::get('cart')->totalQty : ''); ?></span>
        </a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user" aria-hidden="true"></i> User Management<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php if(Auth::check()): ?>
            <li><a href="<?php echo e(route('user.profile')); ?>">User profile</a></li>
            <li><a href="<?php echo e(route('user.signin')); ?>">Logout</a></li>
            <?php else: ?>
            <li><a href="<?php echo e(route('user.signup')); ?>">Sign Up</a></li>
            <li><a href="<?php echo e(route('user.signin')); ?>">Sign In</a></li>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  