<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>

<?php $__env->startSection('hero'); ?>
<section id="hello" class="home-forum bg-mega">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="main_home">
        <div class="home_text">
          <!-- <h1 class="text-white"><?php echo app('translator')->get('lang.forum'); ?></h1> <br /> -->
        </div>
        <br /><br /><br /><br /><br /><br />

      </div>
    </div><!--End off row-->
  </div><!--End off container -->
</section> <!--End off Home Sections-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Section pour les posts -->
    <div class="table-responsive">
      <?php if(auth()->check()): ?>
      <h2 class="text-center my-4 text-primary"><?php echo app('translator')->get('lang.forum_posts'); ?></h2>
      <br />
      <div class="text-center my-4 margin-buttom-20">
        <a href="<?php echo e(route('forum.create')); ?>" class="btn btn-warning mb-3"><?php echo app('translator')->get('lang.add_new_post'); ?></a>
      </div>
      <br />
      <table class="table table-bordered table-hover">
        <thead class="bg-primary text-white">
          <tr>
            <th><?php echo app('translator')->get('lang.title'); ?></th>
            <th><?php echo app('translator')->get('lang.content'); ?></th>
            <th><?php echo app('translator')->get('lang.author'); ?></th>
            <th><?php echo app('translator')->get('lang.date'); ?></th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $forumPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $forumPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if(app()->getLocale() === 'fr' && $forumPost->title_fr != null && $forumPost->body_fr != null): ?>
          <tr>
            <td><a href="<?php echo e(route('forum.show', $forumPost->id)); ?>"><?php echo e($forumPost->title_fr); ?></a></td>
            <td><?php echo e($forumPost->body_fr); ?></td>
            <td><?php echo e($forumPost->forumPostHasUser->name ?? 'inconnu'); ?></td>
            <td><?php echo e($forumPost->date); ?></td>
          </tr>
          <?php elseif(app()->getLocale() === 'en' && $forumPost->title != null && $forumPost->body != null): ?>
          <tr>
            <td><a href="<?php echo e(route('forum.show', $forumPost->id)); ?>"><?php echo e($forumPost->title); ?></a></td>
            <td><?php echo e($forumPost->body); ?></td>
            <td><?php echo e($forumPost->forumPostHasUser->name ?? 'inconnu'); ?></td>
            <td><?php echo e($forumPost->date); ?></td>
          </tr>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <div class="d-flex justify-content-center m-4">
        <?php echo e($forumPosts); ?>

      </div>
      <?php else: ?>
      <h2 class="text-center my-4 text-primary"><?php echo app('translator')->get('lang.must_be_logged_in'); ?></h2>
      <?php endif; ?>
    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/forum/index.blade.php ENDPATH**/ ?>