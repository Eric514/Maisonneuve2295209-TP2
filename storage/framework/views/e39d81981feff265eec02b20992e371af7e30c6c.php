<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>

<?php $__env->startSection('hero'); ?>
<section id="hello" class="home-signin bg-mega">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="main_home">
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

      </div>
    </div><!--End off row-->
  </div><!--End off container -->
</section> <!--End off Home Sections-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main class="login-form">
  <div class="container">
    <div class="row justify-content-center display-flex-center">
      <div class="col-md-4 pt-4">
        <div class="card">
          <h3 class="card-header text-center">
            Enregister
          </h3>
          <div class="card-body">
            <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong> <?php echo e(session('success')); ?></strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
            <form action="<?php echo e(route('auth.store')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="form-group mb-3">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                <?php if($errors->has('name')): ?>
                <div class="text-danger mt-2">
                  <?php echo e($errors->first('name')); ?>

                </div>
                <?php endif; ?>
              </div>
              <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                <?php if($errors->has('email')): ?>
                <div class="text-danger mt-2">
                  <?php echo e($errors->first('email')); ?>

                </div>
                <?php endif; ?>
              </div>
              <div class="form-group mb-3">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password">
                <?php if($errors->has('password')): ?>
                <div class="text-danger mt-2">
                  <?php echo e($errors->first('password')); ?>

                </div>
                <?php endif; ?>
              </div>
              <div class="d-grid mx-auto">
                <input type="submit" value="Sauvegarder" class="btn btn-dark btn-block">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/auth/create.blade.php ENDPATH**/ ?>