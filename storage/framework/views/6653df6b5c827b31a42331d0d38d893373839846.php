<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>

<?php $__env->startSection('hero'); ?>
    <section id="hello" class="home-update bg-mega">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="main_home">
          <div class="home_text">
          <h1 class="text-white"><?php echo app('translator')->get('lang.student_edit'); ?></h1> <br />
        </div>
        <br /><br /><br /><br /><br /><br />

          </div>
        </div><!--End off row-->
      </div><!--End off container -->
    </section> <!--End off Home Sections-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-12 text-center mt-2">
      <h1 class="display-4">
      <?php echo app('translator')->get('lang.student_edit'); ?>
      </h1>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="card">
        <form method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('put'); ?>
          <div class="card-header bg-primary text-white">
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name"><?php echo app('translator')->get('lang.name'); ?></label>
              <input type="text" id="name" name="name" class="form-control" value="<?php echo e($etudiantDetail->name); ?>">
            </div>
            <div class="form-group">
              <label for="address"><?php echo app('translator')->get('lang.adress'); ?></label>
              <input type="text" id="address" name="address" class="form-control" value="<?php echo e($etudiantDetail->address); ?>">
            </div>
            <div class="form-group">
              <label for="phone"><?php echo app('translator')->get('lang.phone'); ?></label>
              <input type="text" id="phone" name="phone" class="form-control" value="<?php echo e($etudiantDetail->phone); ?>">
            </div>
            <div class="form-group">
              <label for="email"><?php echo app('translator')->get('lang.email'); ?></label>
              <input type="text" id="email" name="email" class="form-control" value="<?php echo e($etudiantDetail->email); ?>">
            </div>
            <div class="form-group">
              <label for="birthdate"><?php echo app('translator')->get('lang.birthday'); ?></label>
              <input type="date" id="birthdate" name="birthdate" class="form-control" value="<?php echo e($etudiantDetail->birthdate); ?>">
            </div>
            <div class="control-group col-12">
              <label for="ville_id"><?php echo app('translator')->get('lang.city'); ?></label>

              <select name="ville_id" id="ville_id" class="form-control">
                <?php $__empty_1 = true; $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if($ville->id == $etudiantDetail->ville_id): ?>
                <option value="<?php echo e($ville->id); ?>" selected> <?php echo e($ville->name); ?> </option>
                <?php else: ?>
                <option value="<?php echo e($ville->id); ?>"> <?php echo e($ville->name); ?> </option>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <option value=""><?php echo app('translator')->get('lang.no_city'); ?></option>
                <?php endif; ?>
              </select>

            </div>
          </div>
          <div class="card-footer">
            <a href="<?php echo e(route('etudiant.index')); ?>" class="btn btn-secondary btn-dark"><?php echo app('translator')->get('lang.back_list_student'); ?></a>
            <input type="submit" value="<?php echo app('translator')->get('lang.edit'); ?>" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/etudiant/edit.blade.php ENDPATH**/ ?>