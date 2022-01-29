<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <meta charset="utf-8" />
    <title>2FA Authentication</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicons -->
    <link rel="icon" href="<?php echo e(asset('public/favicon.png')); ?>" type="image/png"/>


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
        <link href="<?php echo e(asset('temp/css/frontend_style_blue.css')); ?>" rel="stylesheet">
        <!--<link rel="stylesheet" href="<?php echo e(asset('temp/css/'.$settings->site_colour.'.css')); ?>">-->

</head>


<body class="auth-page">
    <!-- ======= Loginup Section ======= -->
    <div class="limiter">
        <div class="container-form user-auth">
            <div class="text-center">
            <?php if(Session::has('message')): ?>
                <div class="alert alert-danger alert-dismissible fade show " role="alert">
                    <?php echo e(Session::get('message')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <?php endif; ?>
                    
            <div class="section-form-box">
                <h3 class="text-center mt-3"> A 2FA authentication code has been sent to your email, kindly check your email and enter code below to continue.</h3>
                <form role="form" method="POST" action="<?php echo e(route('2fa')); ?>" class="form">
                    <?php echo e(csrf_field()); ?> 
                    
                    
                    <div class="form__group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                        <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('2fa')); ?></strong>
                        </span>
                        <?php endif; ?>
                        <label for="2fa" class="form__label">Two Factor Authentication</label>
                        <input id="2fa" type="text" class="form__input" name="2fa" style="background-color:#fff; color:#222;" placeholder="Enter the code you received here." required autofocus>
                    </div>
                    
                    <div class="form__group text-center">
                        <button class="btn btn__login" type="submit">Submit</button>
                    </div>

                    
                    <div class="text-center mb-1">
                        <small class=" text-center">Are you Stucked Here ?<a href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="">
                            Repeat login
                            </a>
                        </small>
                    </div>
                    
                </form>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
                    
        </div>
    
    </div>
</body>
</html>

</html>
