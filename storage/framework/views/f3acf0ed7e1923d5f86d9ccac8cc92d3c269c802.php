<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>


<?php $__env->startSection('hero'); ?>
    <section id="hello" class="home-edit bg-mega">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="main_home">
          <div class="home_text">
          <h1 class="text-white"><?php echo app('translator')->get('lang.edit_forum_post'); ?></h1> <br />
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
      <h1 class="text-center my-4 margin-buttom-20"><?php echo app('translator')->get('lang.edit_forum_post'); ?></h1>
      <form action="<?php echo e(route('forum.edit', $forumPost->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <input type="hidden" name="date" value="<?php echo e($forumPost->date); ?>">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active btn-info" id="nav-francais-tab" data-bs-toggle="tab" data-bs-target="#nav-francais" type="button" role="tab" aria-controls="nav-francais" aria-selected="true"><?php echo app('translator')->get('lang.french'); ?></button>
            <button class="nav-link btn-warning" id="nav-anglais-tab" data-bs-toggle="tab" data-bs-target="#nav-anglais" type="button" role="tab" aria-controls="nav-anglais" aria-selected="false"><?php echo app('translator')->get('lang.english'); ?></button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-francais" role="tabpanel" aria-labelledby="nav-francais-tab" tabindex="0">
            <!-- Formulaire en français -->
            <div class="mb-3">
              <label for="title_fr" class="form-label"><?php echo app('translator')->get('lang.title_in_french'); ?></label>
              <input type="text" class="form-control" id="title_fr" name="title_fr" value="<?php echo e($forumPost->title_fr); ?>">
            </div>
            <div class="mb-3">
              <label for="body_fr" class="form-label"><?php echo app('translator')->get('lang.content_in_french'); ?></label>
              <textarea class="form-control" id="body_fr" name="body_fr" rows="3"><?php echo e($forumPost->body_fr); ?></textarea>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-anglais" role="tabpanel" aria-labelledby="nav-anglais-tab" tabindex="0">
            <!-- Formulaire en anglais -->
            <div class="mb-3">
              <label for="title" class="form-label"><?php echo app('translator')->get('lang.title_in_english'); ?></label>
              <input type="text" class="form-control" id="title" name="title" value="<?php echo e($forumPost->title); ?>">
            </div>
            <div class="mb-3">
              <label for="body" class="form-label"><?php echo app('translator')->get('lang.content_in_english'); ?></label>
              <textarea class="form-control" id="body" name="body" rows="3"><?php echo e($forumPost->body); ?></textarea>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-success"><?php echo app('translator')->get('lang.update'); ?></button>
        <a href="<?php echo e(route('forum.index')); ?>" class="btn btn-warning"><?php echo app('translator')->get('lang.back_list'); ?></a>
      <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-info"><?php echo app('translator')->get('lang.btn_dashboard'); ?></a>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/forum/edit.blade.php ENDPATH**/ ?>