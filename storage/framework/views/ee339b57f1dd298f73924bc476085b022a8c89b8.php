<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>

<?php $__env->startSection('hero'); ?>
<section id="hello" class="home-list-uploads bg-mega">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="main_home">
        <div class="home_text">
          <h1 class="text-white"><?php echo app('translator')->get('lang.uploads'); ?></h1> <br />
        </div>
        <br /><br /><br /><br /><br /><br />

      </div>
    </div><!--End off row-->
  </div><!--End off container -->
</section> <!--End off Home Sections-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<?php if(auth()->check()): ?>
<div class="text-center my-4 margin-buttom-20">
  <a href="<?php echo e(route('files.create')); ?>" class="btn btn-warning mb-3"><?php echo app('translator')->get('lang.add_new_file'); ?></a>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th><?php echo app('translator')->get('lang.title'); ?></th>
      <th><?php echo app('translator')->get('lang.date'); ?></th>
      <th><?php echo app('translator')->get('lang.user'); ?></th>

    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $filePosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filePost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e(app()->getLocale() === 'fr' ? $filePost->title_fr : $filePost->title_en); ?> <a href="<?php echo e(asset('files/'.$filePost->filename)); ?>" target="_blank"><?php echo app('translator')->get('lang.download'); ?></a></td>
      <td><?php echo e($filePost->created_at); ?></td>
      <td>
        <?php if($filePost->user): ?>
        <?php echo e($filePost->user->name); ?>

        <?php endif; ?>
      </td>


      <td>
        <?php if($filePost->user_id === Auth::id()): ?>
        <form action="<?php echo e(route('files.destroy', $filePost->id)); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button type="submit" class="btn btn-danger"><?php echo app('translator')->get('lang.btn_delete'); ?></button>
        </form>
        <?php endif; ?>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php echo $filePosts->links(); ?>

<?php else: ?>
<h2 class="text-center my-4 text-primary"><?php echo app('translator')->get('lang.must_be_logged_in'); ?></h2>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/files/index.blade.php ENDPATH**/ ?>