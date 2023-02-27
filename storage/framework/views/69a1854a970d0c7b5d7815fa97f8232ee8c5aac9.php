<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>

<?php $__env->startSection('hero'); ?>
<section id="hello" class="home-create-post bg-mega">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="main_home">
        <div class="home_text">
          <h1 class="text-white"><?php echo app('translator')->get('lang.create_forum_post'); ?></h1> <br />
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
    <div class="col-12">
      <h1 class="text-center my-4 margin-buttom-100"><?php echo app('translator')->get('lang.create_new_forum_post'); ?></h1>
      <form action="<?php echo e(route('forum.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="date" value="<?php echo e(date('Y-m-d')); ?>">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-francais-tab" data-bs-toggle="tab" data-bs-target="#nav-francais" type="button" role="tab" aria-controls="nav-francais" aria-selected="true"><?php echo app('translator')->get('lang.french'); ?></button>
            <button class="nav-link" id="nav-anglais-tab" data-bs-toggle="tab" data-bs-target="#nav-anglais" type="button" role="tab" aria-controls="nav-anglais" aria-selected="false"><?php echo app('translator')->get('lang.english'); ?></button>
          </div>
        </nav>
        <br />
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-francais" role="tabpanel" aria-labelledby="nav-francais-tab" tabindex="0">
            <!-- Formulaire en français -->
            <div class="mb-3">
              <label for="title_fr" class="form-label"><?php echo app('translator')->get('lang.title_in_french'); ?></label>
              <input type="text" class="form-control" id="title_fr" name="title_fr">
              <?php if($errors->has('title_fr')): ?>
              <div class="text-danger"><?php echo e($errors->first('title_fr')); ?></div>
              <?php endif; ?>
            </div>
            <br />
            <div class="mb-3">
              <label for="body_fr" class="form-label"><?php echo app('translator')->get('lang.content_in_french'); ?></label>
              <textarea class="form-control" id="body_fr" name="body_fr" rows="3"></textarea>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-anglais" role="tabpanel" aria-labelledby="nav-anglais-tab" tabindex="0">
            <!-- Formulaire en anglais -->
            <div class="mb-3">
              <label for="title" class="form-label"><?php echo app('translator')->get('lang.title_in_english'); ?></label>
              <input type="text" class="form-control" id="title" name="title">
              <?php if($errors->has('title')): ?>
              <div class="text-danger"><?php echo e($errors->first('title')); ?></div>
              <?php endif; ?>
            </div>
            <br />
            <div class="mb-3">
              <label for="body" class="form-label"><?php echo app('translator')->get('lang.content_in_english'); ?></label>
              <textarea class="form-control" id="body" name="body" rows="3"></textarea>
              <?php if($errors->has('body')): ?>
              <div class="text-danger"><?php echo e($errors->first('body')); ?></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <br />
        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('lang.submit'); ?></button>
      </form>
    </div>
  </div>
</div>
<br /><br /><br />
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/forum/create.blade.php ENDPATH**/ ?>