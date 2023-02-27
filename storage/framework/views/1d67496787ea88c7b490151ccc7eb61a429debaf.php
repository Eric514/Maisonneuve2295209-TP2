<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>

<?php $__env->startSection('hero'); ?>
    <section id="hello" class="home-details-student bg-mega">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="main_home">
          <div class="home_text">
          <h1 class="text-white"><?php echo app('translator')->get('lang.student_detail'); ?></h1> <br />
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
      <h1><?php echo app('translator')->get('lang.student_detail'); ?></h1>
      <table class="table table-striped">
        <tr>
          <th><?php echo app('translator')->get('lang.name'); ?> :</th>
          <td><?php echo e($etudiantDetail->name); ?></td>
        </tr>
        <tr>
          <th><?php echo app('translator')->get('lang.adress'); ?> :</th>
          <td><?php echo e($etudiantDetail->address); ?></td>
        </tr>
        <tr>
          <th><?php echo app('translator')->get('lang.phone'); ?> :</th>
          <td><?php echo e($etudiantDetail->phone); ?></td>
        </tr>
        <tr>
          <th><?php echo app('translator')->get('lang.email'); ?> :</th>
          <td><?php echo e($etudiantDetail->email); ?></td>
        </tr>
        <tr>
          <th><?php echo app('translator')->get('lang.birthday'); ?> :</th>
          <td><?php echo e($etudiantDetail->birthdate); ?></td>
        </tr>
        <tr>
          <th><?php echo app('translator')->get('lang.city'); ?> :</th>
          <td><?php echo e($etudiantDetail->etudiantHasVille->name ?? 'ville inconnue'); ?></td>
        </tr>
      </table>
        <a href="<?php echo e(route('etudiant.index')); ?>" class="btn btn-secondary btn-dark"><?php echo app('translator')->get('lang.back_list_student'); ?></a>
        <a href="<?php echo e(route('etudiant.edit', $etudiantDetail->id)); ?>" class="btn btn-info"><?php echo app('translator')->get('lang.edit'); ?></a>
              <!-- Button trigger modal -->
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <?php echo app('translator')->get('lang.delete'); ?>
      </button>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/etudiant/show.blade.php ENDPATH**/ ?>