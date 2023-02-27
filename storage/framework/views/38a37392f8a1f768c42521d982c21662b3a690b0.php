<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>

<?php $__env->startSection('hero'); ?>
<section id="hello" class="home-profil bg-mega">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="main_home">
        <div class="home_text">
          <h1 class="text-white"><?php echo app('translator')->get('lang.dashboard'); ?></h1> <br />
        </div>
        <br /><br /><br /><br /><br /><br />

      </div>
    </div><!--End off row-->
  </div><!--End off container -->
</section> <!--End off Home Sections-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-center display-flex-center">
    <div class="col-lg-8">
      <div class="card mb-4">
        <h4 class="card-header"><?php echo app('translator')->get('lang.dashboard_description'); ?></h4>
        <br />
        <div class="card-body">
          <h5 class="card-title"><?php echo app('translator')->get('lang.welcome_back'); ?>, <?php echo e(Auth::user()->name); ?></h5>
          <p class="card-text"><?php echo app('translator')->get('lang.email'); ?>: <?php echo e(Auth::user()->email); ?></p>
          <p class="card-text"><?php echo app('translator')->get('lang.adress'); ?>: <?php echo e(Auth::user()->userHasEtudiant->address); ?></p>
          <p class="card-text"><?php echo app('translator')->get('lang.phone'); ?>: <?php echo e(Auth::user()->userHasEtudiant->phone); ?></p>
        </div>
      </div>
      <br /><br /><br />

      <div class="card">
        <div class="card-header"><?php echo app('translator')->get('lang.your_forum_posts'); ?> :</div> <br />
        <div class="card-body">
          <?php if(Auth::user()->userHasForumPost != null && count(Auth::user()->userHasForumPost) > 0): ?>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th><?php echo app('translator')->get('lang.title'); ?></th>
                  <th><?php echo app('translator')->get('lang.content'); ?></th>
                  <th colspan="3"><?php echo app('translator')->get('lang.actions'); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = Auth::user()->userHasForumPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(app()->getLocale() === 'fr' && $post->title_fr != null && $post->body_fr != null): ?>
                <tr>
                  <td><?php echo e($post->title_fr ?? $post->title); ?></td>
                  <td><?php echo e($post->body_fr ?? $post->body); ?></td>
                  <td>
                    <div class="display-inline-flex">
                      <a href="<?php echo e(route('forum.show', $post->id)); ?>" class="btn btn-info"><?php echo app('translator')->get('lang.view'); ?></a>
                      <a href="<?php echo e(route('forum.edit', $post->id)); ?>" class="btn btn-warning"><?php echo app('translator')->get('lang.edit'); ?></a>
                      <form action="<?php echo e(route('forum.destroy', $post->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"><?php echo app('translator')->get('lang.delete'); ?></button>
                      </form>
                    </div>
                  </td>
                </tr>
                <?php elseif(app()->getLocale() === 'en' && $post->title != null && $post->body != null): ?>
                <tr>
                  <td><?php echo e($post->title ?? $post->title_fr); ?></td>
                  <td><?php echo e($post->body ?? $post->body_fr); ?></td>
                  <td>
                    <div class="display-inline-flex">
                      <a href="<?php echo e(route('forum.show', $post->id)); ?>" class="btn btn-info"><?php echo app('translator')->get('lang.view'); ?></a>
                      <a href="<?php echo e(route('forum.edit', $post->id)); ?>" class="btn btn-warning"><?php echo app('translator')->get('lang.edit'); ?></a>
                      <form action="<?php echo e(route('forum.destroy', $post->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"><?php echo app('translator')->get('lang.delete'); ?></button>
                      </form>
                    </div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <?php else: ?>
          <p><?php echo app('translator')->get('lang.no_post'); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <br /><br /><br />

      <div class="card">
        <div class="card-header"><?php echo app('translator')->get('lang.your_file_uploads'); ?> :</div> <br />
        <div class="card-body">
          <?php if(Auth::user()->userHasFilePost != null && count(Auth::user()->userHasFilePost) > 0): ?>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th><?php echo app('translator')->get('lang.title'); ?></th>
                  <th><?php echo app('translator')->get('lang.date'); ?></th>
                  <th><?php echo app('translator')->get('lang.actions'); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = Auth::user()->userHasFilePost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filePost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e(app()->getLocale() === 'fr' ? $filePost->title_fr : $filePost->title_en); ?></td>
                  <td><?php echo e($filePost->created_at); ?></td>
                  <td>
                    <div class="display-inline-flex">
                      <a href="<?php echo e(asset('files/'.$filePost->filename)); ?>" target="_blank" class="btn btn-info"><?php echo app('translator')->get('lang.download'); ?></a>
                      <a href="<?php echo e(route('files.edit', $filePost->id)); ?>" class="btn btn-warning"><?php echo app('translator')->get('lang.edit'); ?></a>
                      <form action="<?php echo e(route('files.destroy', $filePost->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"><?php echo app('translator')->get('lang.btn_delete'); ?></button>
                      </form>
                    </div>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <?php else: ?>
          <p><?php echo app('translator')->get('lang.no_file_upload'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/dashboard.blade.php ENDPATH**/ ?>