<?php echo $__env->make('home.assetss', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="auth-page">
    <!-- ======= Reset Password ======= -->
    <div class="limiter">
        <div class="container-form user-auth">
            <div class="text-center">
                <?php if(Session::has('message')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo e(Session::get('message')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <?php endif; ?>
    
                <?php if(session('status')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('status')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <?php endif; ?>   
            </div>
                 
            <div class="section-form-box">
                <div>
					<h2 class="text-center mt-3">Create New Password</h2>
					
					<!-- Section Title Ends -->
					<!-- Form Starts -->
					 <?php if(session('status')): ?>
					 <div class="alert-success">
                        <div class="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    </div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo e(route('password.request')); ?>" class="form">
                        <?php echo e(csrf_field()); ?> 
                        
                        <div class="form__group <?php echo e($errors->has('email') ? ' has-error' : ''); ?> ">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                            <label for="email" class="form__label">Email address</label>
                            <input type="hidden" name="token" value="<?php echo e($token); ?>" class="form__input">
                            <input id="email" type="email" class="form__input <?php echo e($errors->has('email') ? ' has-error' : ''); ?>" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" style="background-color:#fff; color:#222;" placeholder="Enter your e-mail" required autofocus>
                        </div>
                        <div class="form__group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                            <?php endif; ?>
                            <label for="password" class="form__label">Password</label>
                            <input style="background-color:#fff; color:#222;"  class="form__input" id="password" name="password" id="password" placeholder="Enter Password" type="password" required>
                        </div>
        
                        <div class="form_group <?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <?php if($errors->has('password_confirmation')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                            </span>
                            <?php endif; ?>
                            <label for="password-confirm" class="form__label">Password Confirmation</label>
                            <input style="background-color:#fff; color:#222;"  class="form__input" id="password-confirm" name="password" id="password_confirmation" placeholder="Enter Password" type="password" required>
                            
                        </div>
                        
                        <div class="form__group text-center">
                            <button type="submit" class="btn btn__login">Reset Password</button>
                        </div>
        
                        <div class="text-center">
                            <hr>
                            <small class=" text-center">&copy; Copyright  <?php echo e(date('Y')); ?> &nbsp; <?php echo e($settings->site_name); ?> &nbsp; All Rights Reserved.</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
