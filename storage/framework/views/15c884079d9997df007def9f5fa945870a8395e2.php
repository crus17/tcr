<?php $__env->startComponent('mail::message'); ?>

# Welcome to <?php echo e($demo->sender); ?>!
Dear <?php echo e($demo->receiver_name); ?> Thank you for choosing <?php echo e($demo->sender); ?> as your Crypto Investment Platform. Your account has been successfully created. Make sure to keep your login details safe for future references. For safety and security reasons, never share your login details or password with anyone. 

A large list of tradeable Assets, Indices, Stocks and Commodities CFD and Crypto Investment using the MTA trading platform and Bitcoin mining. 

Please contact us at <?php echo e($demo->contact_email); ?> with your email or your updated contact number or visit our contact us page. <br><br>

Kind regards,<br>
<?php echo e($demo->sender); ?>.<br><br>

--------------------------------
Email: <?php echo e($demo->receiver_email); ?><br>
Password: <?php echo e($demo->receiver_password); ?>

<?php echo $__env->renderComponent(); ?>


