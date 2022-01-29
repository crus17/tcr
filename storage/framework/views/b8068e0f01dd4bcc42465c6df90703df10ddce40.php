<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($settings->site_name); ?> | <?php echo e($settings->site_title); ?></title>
    <link rel="icon" href="<?php echo e(asset ('temp/img/favicon.png')); ?>" type="image/png" sizes="32x32">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="<?php echo e(asset ('temp/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
        <link href="<?php echo e(asset ('temp/lib/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset ('temp/lib/animate/animate.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset ('temp/lib/ionicons/css/ionicons.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset ('temp/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset ('temp/lib/lightbox/css/lightbox.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset ('temp/lib/jquery/magnific-popup.css')); ?>" rel="stylesheet">



    <!-- Main Stylesheet File -->
    <!--<link href="<?php echo e(asset('temp/css/frontend_style_'.$settings->site_colour.'.css')); ?>" rel="stylesheet">-->
    <link href="<?php echo e(asset('temp/css/frontend_style_blue.css')); ?>" rel="stylesheet">

</head>
<body>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  {<?php echo $settings->tawk_to; ?>}
  </script>

  <!--==========================
    Header
  ============================-->
  <header id="header_2">
    <div class="container-fluid">
      <div id="logo" class="pull-left mt-0">
        <!-- <h1><a href="#intro" class="scrollto">Onlinetrade</a></h1> -->
        <a href="\"><img src="<?php echo e(asset ('temp/img/logo_light.png')); ?>" alt="<?php echo e($settings->site_name); ?>" title="" class="mt-0 logo" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="https://txflux.com/#services">Services</a></li>
          <li><a href="https://txflux.com/#about">How it works</a></li>
          <li><a href="about">About us</a></li>
          <li><a href="#">Pricing</a></li>
          <!--<li><a href="#testimonials">Testimonials</a></li>-->
          
          </li>
          <li><a href="#footer">Contact us</a></li>

          <?php if($settings->site_preference =="Web dashboard only"): ?>
          <?php if(auth()->guard()->guest()): ?>
          <li><a href="login" class="">Sign In</a></li>
          <li><a href="register" class="btn-log ">Get started</a></li>
          <?php else: ?>
          <li class="nav-item avatar dropdown">
                <a id="navbarDropdownMenuLink-55" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
                <a href="dashboard" class="dropdown-item text-dark">Dashboard</a><br>
                  <a href="<?php echo e(route('logout')); ?>" class="dropdown-item text-dark"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    	</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </div>
              </li>
          <?php endif; ?>
          <?php else: ?>

          <li><a href="<?php echo e($settings->bot_link); ?>" class="btn-log ">Get started</a></li>
          <?php endif; ?>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main">
    
    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3>Our Investment Plan</h3>
          <p>Choose how you want to invest with us</p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
      
          <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-4">
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title"> 
                    <?php echo e($plan->name); ?>

                  </h4>
                  <div class="card-header">
                    <h3><span class="currency"><?php echo e($settings->currency); ?><?php echo e($plan->price); ?></span><span class="period"></span></h3>
                  </div>
                    <small>Min. Possible deposit:</small>
                    <h6><?php echo e($settings->currency); ?><?php echo e($plan->min_price); ?></h6>
                    <small>Max. Possible deposit:</small>
                    <h6><?php echo e($settings->currency); ?><?php echo e($plan->max_price); ?></h6>
                  <ul class="list-group">
                    <li class="list-group-item"><?php echo e($settings->currency); ?><?php echo e($plan->minr); ?> Minimum return</li>
                    <li class="list-group-item"><?php echo e($settings->currency); ?><?php echo e($plan->maxr); ?> Maximum return</li>
                    <li class="list-group-item"><?php echo e($settings->currency); ?><?php echo e($plan->gift); ?> Gift Bonus</li>
                  </ul>
                  <a href="login" class="btn">Buy Now</a>
                </div>
              </div>
            </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>

    </section>
    <!-- #pricing -->

    <!--==========================
      Payments Sections
    ============================-->

    <section id="payments" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>we accept</h3>
        </header>

        <div class="owl-carousel payments-carousel">
          <!--<img src="<?php echo e(asset('temp/img/payments/payment-1.png')); ?>" alt="">-->
          <img src="<?php echo e(asset('temp/img/payments/payment-2.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-3.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-4.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-5.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-6.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-7.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-8.png')); ?>" alt="">
        </div>

      </div>
    </section><!-- #Payments ends -->

  </main>
  <!--==========================
    Footer Sections
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3><?php echo e($settings->site_name); ?></h3>
            <p>The highest paying Bitcoin investment portforlio manager and cloud mining provider on the market. Start mining Bitcoin today!</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right scrollto"></i> <a href="#intro">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              125 St Georges Terrace, <br>
              Perth, Western Australia<br>
              <a href="https://wa.me/18134383159?text=Hello+Txflux" class="text-white"><strong>WhatsApp:</strong> +1 813-438-3159<br></a>
              <!--<a href="#" class="text-white"><strong>Phone:</strong> +1 5589 55488 55<br></a>-->
              <a href="mailto: support@txflux.com" class="text-white"><strong>Email:</strong> support@txflux.com<br></a>
            </p>

            <div class="social-links">
              <a href="https://wa.me/18134383159?text=Hello+Txflux" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright  <?php echo e(date('Y')); ?> &nbsp;<strong> <?php echo e($settings->site_name); ?> &nbsp;</strong> All Rights Reserved.
      </div>
    </div>
  </footer><!-- #footer ends -->
    
  <!-- Back to top -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="<?php echo e(asset('temp/lib/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/jquery/jquery-migrate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/superfish/hoverIntent.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/superfish/superfish.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/isotope/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/lightbox/js/lightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/touchSwipe/jquery.touchSwipe.min.js')); ?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo e(asset('temp/js/main_v2.js')); ?>"></script>

</body>
</html>

