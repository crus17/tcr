<?php
	if (Auth::user()->dashboard_style == "light") {
		$bg="light";
		$text = "dark";
	} else {
		$bg="dark";
		$text = "light";
	}
?>

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('user.topmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('user.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="main-panel bg-<?php echo e($bg); ?>">
			<div class="content bg-<?php echo e($bg); ?>">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-<?php echo e($text); ?>">Loan Request</h1>
					</div>
					<?php if(Session::has('message')): ?>
						<div class="row">
							<div class="col-lg-12">
								<div class="alert alert-info alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<i class="fa fa-info-circle"></i> <?php echo e(Session::get('message')); ?>

								</div>
							</div>
						</div>
					<?php endif; ?>
					<?php if(count($errors) > 0): ?>
						<div class="row">
							<div class="col-lg-12">
								<div class="alert alert-danger alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<i class="fa fa-warning"></i> <?php echo e($error); ?>

									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							</div>
						</div>
                	<?php endif; ?>
					<div class="row">
						<div class="col card bg-<?php echo e($bg); ?> shadow-lg p-4">
						    
							<div>
								<!-- Form Starts -->
        						<form  class="form" method="POST" action="<?php echo e(action('SomeController@saveloanrequest')); ?>" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>   
                                    <!-- Input Field Starts -->
                                    
                                    <!--<input style="padding:5px;" class="form-control bg-light text-dark" placeholder="Enter amount here" type="text" name="amount" required><br/>-->
        							
                                    <div style="padding:5px;" class="form__group">
                                        
                                        <!--<label for="amount" style="color:green;" class="form__label">How much would you like to borrow?</label>-->
        								<input  class="form-control bg-light text-dark" id="amount" autocomplete="off" placeholder="Enter Loan Amount"  name="amount" type="number" value="<?php echo e(old('amount')); ?>" required>
                                        <?php if($errors->has('amount')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('amount')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div style="padding:5px;" class="form__group">
                                        <select  class="form-control bg-light text-dark" name="repayments" id="repayments">
            								<option value="None">How many repayments?</option>
            								<option value="1">1</option>
            								<option value="2">2</option>
            								<option value="3">3</option>
                                        </select>
                                    </div>
                                    
        							<!-- Submit Form Button Starts -->
        							<div class="form__group text-center">
        								<button class="btn btn__login" type="submit">Submit Request</button>
                                    </div>
                                    
        							<!-- Submit Form Button Ends -->
                                </form>
                                <!-- Form Ends -->
							</div>
							
							
						</div>
					</div>
					
					
    					<div class="mt-2 mb-4">
    						<h2 class="title1 text-<?php echo e($text); ?>">Loan History</h2>
    					</div>
    					<div class="row mb-5">
    						<div class="col text-center card shadow-lg bg-<?php echo e($bg); ?> p-3">
    							<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
    								<table id="UserTable" class="UserTable table table-hover text-<?php echo e($text); ?>"> 
    									<thead> 
    										<tr> 
    											<!--<th>ID</th> -->
    											<th>Amount</th>
    											<th>Repayments</th>
    											<th>Date created</th> 
    											<th>Status</th>
    										</tr> 
    									</thead> 
    									<tbody> 
    									<?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    										<tr> 
    											<!--<th scope="row"><?php echo e($loan->id); ?></th>-->
    											<td><?php echo e($settings->currency); ?><?php echo e($loan->amount); ?></td> 
    											<td><?php echo e($loan->repayments); ?></td>
    											<td><?php echo e(\Carbon\Carbon::parse($loan->created_at)->toDayDateTimeString()); ?></td>  
    											<?php if($loan->status==Approved): ?> <td><div class="btn btn-success btn-sm m-1" ><?php echo e($loan->status); ?></div></td>
    											<?php elseif($loan->status==Rejected): ?> <td><div class="btn btn-danger btn-sm m-1"><?php echo e($loan->status); ?></div></td>
    											<?php else: ?> <td><div class="btn btn-warning btn-sm m-1"><?php echo e($loan->status); ?></div></td>
    											<?php endif; ?>
    										</tr> 
    									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    									</tbody> 
    								</table>
    							</div>
    						</div>
    					</div>
					
				</div>
			</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>