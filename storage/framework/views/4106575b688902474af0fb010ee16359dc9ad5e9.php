<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <title>TP - Maisonneuve2295209</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="favicon.ico">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-wbxRiY+zcFmlzIKCwW8kwvQ72aFnpsdi0icIheHlWZYwhv0A9+fnIePPDro/ZZYrb8JvzXd07I0+swIlLZjhmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
  <!--Google Font link-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


  <link href="<?php echo e(asset('assets/css/slick.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/css/slick-theme.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/css/animate.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/css/fonticons.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/css/bootstrap.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/css/bootsnav.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/css/bootstrap-theme.css')); ?>" rel="stylesheet" />

  <!--For Plugins external css-->
  <link href="<?php echo e(asset('assets/css/plugins.css')); ?>" rel="stylesheet" />

  <!--Theme custom css -->
  <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet" />

  <link href="<?php echo e(asset('assets/css/colors/maron.css')); ?>" rel="stylesheet" />

  <!--Theme Responsive css-->
  <link href="<?php echo e(asset('assets/css/responsive.css')); ?>" rel="stylesheet" />

  <script src="<?php echo e(asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')); ?>"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">
  
  <?php $locale = session()->get('locale'); ?>

  <!-- Preloader -->
  <div id="loading">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <div class="object" id="object_one"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_four"></div>
      </div>
    </div>
  </div><!--End off Preloader -->


  <div class="culmn">
    <!--Home page style-->
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
      <!-- Start Top Search -->
      <div class="top-search">
        <div class="container">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
          </div>
        </div>
      </div>
      <!-- End Top Search -->
      <div class="container">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
            <li><a class="navbar-brand" href="#"><?php echo app('translator')->get('lang.hello'); ?> <?php if(Auth::check()): ?> <?php echo e(Auth::user()->name); ?> <?php else: ?> <?php echo app('translator')->get('lang.guest'); ?> <?php endif; ?></a>
            </li>
            <?php if(auth()->guard()->guest()): ?>
            <li><a class="nav-link" href="<?php echo e(route('welcome')); ?>"><?php echo app('translator')->get('lang.home'); ?></a></li>
            <li><a class="nav-link" href="<?php echo e(route('auth.create')); ?>"><?php echo app('translator')->get('lang.registration'); ?></a></li>
            <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo app('translator')->get('lang.login'); ?></a></li>
            <?php else: ?>
            <li><a class="nav-link" href="<?php echo e(route('welcome')); ?>"><?php echo app('translator')->get('lang.home'); ?></a></li>
            <li><a class="nav-link" href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('lang.dashboard'); ?></a></li>
            <li><a class="nav-link" href="<?php echo e(route('logout')); ?>"><?php echo app('translator')->get('lang.logout'); ?></a></li>
            <?php endif; ?>
            <li><a class="nav-link" href="<?php echo e(route('forum.index')); ?>"><?php echo app('translator')->get('lang.forum'); ?></a></li>
            <li><a class="nav-link" href="<?php echo e(route('files.index')); ?>"><?php echo app('translator')->get('lang.uploads'); ?></a></li>
            <li><a class="nav-link" href="<?php echo e(route('etudiant.index')); ?>"><?php echo app('translator')->get('lang.students'); ?></a></li>
            <li><a class="nav-link <?php if($locale=='en'): ?> bg-secondary <?php endif; ?>" href="<?php echo e(route('lang', 'en')); ?>">EN<i class="fa fa-flag flag-icon-us"></i></a></li>
            <li><a class="nav-link <?php echo e($locale =='fr' ? 'bg-secondary' : ''); ?>" href="<?php echo e(route('lang', 'fr')); ?>">FR<i class="fa fa-flag flag-icon-fr"></i></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>

    <?php echo $__env->yieldContent('hero'); ?>

    <div class="container">
      <div class="row">
        <div class="main_featured m-top-100">
          <div class="col-sm-12 margin-buttom-100">
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>
      </div>
    </div>



    <!-- scroll up-->
    <div class="scrollup">
      <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div><!-- End off scroll up -->


    <footer id="footer" class="footer bg-black">
      <div class="container">
        <div class="row">
          <div class="main_footer text-center p-top-40 p-bottom-30">
            <p class="wow fadeInRight" data-wow-duration="1s">
            <?php echo app('translator')->get('lang.made_with'); ?>
              <i class="fa fa-heart"></i>
              <?php echo app('translator')->get('lang.by_eric'); ?>,
              <a target="_blank" href="http://www.lesdeuxsauces.com">LESDEUXSAUCES.COM</a>
              <?php echo app('translator')->get('lang.rights'); ?>
            </p>
          </div>
        </div>
      </div>
    </footer>




  </div>

  <!-- JS includes -->
  <script src="<?php echo e(asset('assets/js/vendor/jquery-1.11.2.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/vendor/jquery-1.11.2.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery.magnific-popup.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery.easing.1.3.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery.collapse.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/bootsnav.js')); ?>"></script>


  <!-- paradise slider js -->


  <script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
  <script src="<?php echo e(asset('assets/js/gmaps.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

  <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>

</body>

</html><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/layouts/app.blade.php ENDPATH**/ ?>