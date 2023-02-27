<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>


<?php $__env->startSection('hero'); ?>
<section id="hello" class="home-create-upload bg-mega">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="main_home">
        <div class="home_text">
          <h1 class="text-white"><?php echo app('translator')->get('lang.send'); ?></h1> <br />
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
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><?php echo app('translator')->get('lang.upload_title'); ?></div>
        <div class="panel-body">
          <form method="POST" action="<?php echo e(route('files.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
              <label for="title_fr"><?php echo app('translator')->get('lang.title_fr'); ?></label>
              <input type="text" name="title_fr" id="title_fr" class="form-control">
              <?php if($errors->has('title_fr')): ?>
              <div class="text-danger"><?php echo e($errors->first('title_fr')); ?></div>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="title_en"><?php echo app('translator')->get('lang.title_en'); ?></label>
              <input type="text" name="title_en" id="title_en" class="form-control">
              <?php if($errors->has('title_en')): ?>
              <div class="text-danger"><?php echo e($errors->first('title_en')); ?></div>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="file"><?php echo app('translator')->get('lang.file'); ?></label>
              <input type="file" name="file" id="file" class="form-control-file">
              <?php if($errors->has('file')): ?>
              <div class="text-danger"><?php echo e($errors->first('file')); ?></div>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('lang.upload_submit'); ?></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/files/create.blade.php ENDPATH**/ ?>