<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>

<?php $__env->startSection('hero'); ?>
    <section id="hello" class="home-show bg-mega">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="main_home">
          <div class="home_text">
          <h1 class="text-white"><?php echo app('translator')->get('lang.see_forum_post'); ?></h1> <br />
        </div>
        <br /><br /><br /><br /><br /><br />

          </div>
        </div><!--End off row-->
      </div><!--End off container -->
    </section> <!--End off Home Sections-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- <?php dump($forumPost); ?> -->

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1><?php echo app('translator')->get('lang.post_detail'); ?></h1>
      <table class="table table-striped">
        <tr>
          <th><?php echo app('translator')->get('lang.title'); ?> :</th>
          <td>
            <?php if(app()->getLocale() == 'en' && $forumPost->title != null): ?>
            <?php echo e($forumPost->title); ?>

            <?php elseif(app()->getLocale() == 'fr' && $forumPost->title_fr != null): ?>
            <?php echo e($forumPost->title_fr); ?>

            <?php else: ?>
            <?php echo app('translator')->get('lang.post_not_available'); ?>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <th><?php echo app('translator')->get('lang.content'); ?> :</th>
          <td>
            <?php if(app()->getLocale() == 'en' && $forumPost->body != null): ?>
            <?php echo e($forumPost->body); ?>

            <?php elseif(app()->getLocale() == 'fr' && $forumPost->body_fr != null): ?>
            <?php echo e($forumPost->title_fr); ?>

            <?php else: ?>
            <?php echo app('translator')->get('lang.post_not_available'); ?>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <th><?php echo app('translator')->get('lang.author'); ?> :</th>
          <td><?php echo e($forumPost->forumPostHasUser->name); ?></td>
        </tr>
        <tr>
          <th>Date :</th>
          <td><?php echo e($forumPost->date); ?></td>
        </tr>
      </table>
      <a href="<?php echo e(route('forum.index')); ?>" class="btn btn-warning"><?php echo app('translator')->get('lang.back_list'); ?></a>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/forum/show.blade.php ENDPATH**/ ?>