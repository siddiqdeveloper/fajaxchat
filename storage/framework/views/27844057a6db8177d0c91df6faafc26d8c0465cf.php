<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <title>Instamojo Payment Gateway HackTheStuff</title>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
      <style>
         .mt40{
         margin-top: 40px;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-lg-12 mt40">
               <div class="card-header" style="background: #0275D8;">
                  <h2>Register for Event</h2>
               </div>
            </div>
         </div>
         <?php if($errors->any()): ?>
         <div class="alert alert-danger">
            <strong>Opps!</strong> Something went wrong<br>
            <ul>
               <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li><?php echo e($error); ?></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
         </div>
         <?php endif; ?>
         <form action="<?php echo e(url('pay')); ?>" method="POST" name="laravel_instamojo">
            <?php echo e(csrf_field()); ?>

            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <strong>Name</strong>
                     <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <strong>Mobile Number</strong>
                     <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" required>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <strong>Email Id</strong>
                     <input type="text" name="email" class="form-control" placeholder="Enter Email id" required>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <strong>Event Fees</strong>
                     <input type="text" name="amount" class="form-control" placeholder="" value="100" readonly="">
                  </div>
               </div>
               <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </div>
         </form>
      </div>
   </body>
</html><?php /**PATH C:\wamp64\www\example-app\resources\views/payment.blade.php ENDPATH**/ ?>