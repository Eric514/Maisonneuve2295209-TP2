<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>

<?php $__env->startSection('hero'); ?>
    <section id="hello" class="home-students bg-mega">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="main_home">
          <div class="home_text">
          <h1 class="text-white"><?php echo app('translator')->get('lang.student_list'); ?></h1> <br />
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
      <h1 class="text-center my-4 margin-buttom-20"><?php echo app('translator')->get('lang.student_list_college'); ?></h1>

      <div class="text-center my-4 margin-buttom-20">
        <h2 class="text-warning">
        <?php echo app('translator')->get('lang.add_student'); ?>
        </h2>
        <a href="<?php echo e(route('etudiant.create')); ?>" class="btn btn-warning mb-3 margin-buttom-40"><?php echo app('translator')->get('lang.add_student'); ?> </a>
      </div>

      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr class="bg-primary text-white">
            <!-- <th>ID</th> -->
            <th><?php echo app('translator')->get('lang.name'); ?></th>
            <th><?php echo app('translator')->get('lang.adress'); ?></th>
            <th><?php echo app('translator')->get('lang.phone'); ?></th>
            <th><?php echo app('translator')->get('lang.email'); ?></th>
            <th><?php echo app('translator')->get('lang.city'); ?></th>
            <th colspan="3"><?php echo app('translator')->get('lang.actions'); ?></th>
          </tr>
        </thead>
        <tbody>
          <?php $__empty_1 = true; $__currentLoopData = $etudiantDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiantDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <tr>
            <td><?php echo e($etudiantDetail->name); ?></td>
            <td><?php echo e($etudiantDetail->address); ?></td>
            <td><?php echo e($etudiantDetail->phone); ?></td>
            <td><?php echo e($etudiantDetail->email); ?></td>
            <td><?php echo e($etudiantDetail->etudiantHasVille->name); ?></td>
            <td><a href="<?php echo e(route('etudiant.show', $etudiantDetail->id)); ?>" class="btn btn-dark btn-sm"><?php echo app('translator')->get('lang.view'); ?></a></td>
            <td><a href="<?php echo e(route('etudiant.edit', $etudiantDetail->id)); ?>" class="btn btn-info btn-sm"><?php echo app('translator')->get('lang.edit'); ?></a></td>
            <td>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <?php echo app('translator')->get('lang.delete'); ?>
              </button>

            </td>
          </tr>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <p class="text-warning">
          <?php echo app('translator')->get('lang.no_student'); ?>
          </p>
          <?php endif; ?>
        </tbody>
      </table>
      <div class="d-flex justify-content-center m-4">
      <?php echo e($etudiantDetails); ?>

      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<!-- https://getbootstrap.com/docs/5.3/components/modal/#how-it-works -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo app('translator')->get('lang.delete'); ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php echo app('translator')->get('lang.confirm_delete'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo app('translator')->get('lang.cancel'); ?></button>
        <form class="d-inline-block" action="<?php echo e(route('etudiant.destroy', $etudiantDetail->id)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('delete'); ?>
          <input type="submit" class="btn btn-danger" value="<?php echo app('translator')->get('lang.delete'); ?>">
        </form>
      </div>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/etudiant/index.blade.php ENDPATH**/ ?>