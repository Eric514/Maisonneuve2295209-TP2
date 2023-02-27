<?php $__env->startSection('title', 'TP - Maisonneuve2295209'); ?>

<?php $__env->startSection('hero'); ?>
<section id="hello" class="home bg-mega">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="main_home">
        <div class="home_text">
          <h1 class="text-white"><?php echo app('translator')->get('lang.welcome_to_eduforum'); ?></h1> <br />
          <h2 style="color: white;"><?php echo app('translator')->get('lang.where_students_connect_and_learn_together'); ?></h2>
        </div>
          <br /><br /><br />

      </div>
    </div><!--End off row-->
  </div><!--End off container -->
</section> <!--End off Home Sections-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!--About Sections-->
<section id="about" class="about roomy-100">
  <div class="container">
    <div class="row">
      <div class="main_about">
        <div class="col-md-6">
          <div class="about_content">
            <h2><?php echo app('translator')->get('lang.about_us'); ?></h2>
            <div class="separator_left"></div>
            <p><?php echo app('translator')->get('lang.eduforum_description'); ?></p>
          </div>
        </div>
      </div>
    </div><!--End off row-->
  </div><!--End off container -->
  <br />
  <br />
  <br />
  <br />
  <hr />
  <br />
  <br />
  <div class="container">
    <div class="row">
      <div class="about_bottom_content">
        <div class="col-md-4">
          <div class="about_bottom_item m-top-20">
            <div class="ab_head">
              <div class="ab_head_icon">
                <i class="icofont icofont-fire-burn"></i>
              </div>
              <h6 class="m-top-20"><?php echo app('translator')->get('lang.creative_community'); ?></h6>
            </div>
            <p class="m-top-20"><?php echo app('translator')->get('lang.community_description'); ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="about_bottom_item m-top-20">
            <div class="ab_head">
              <div class="ab_head_icon">
                <i class="icofont icofont-speech-comments"></i>
              </div>
              <h6 class="m-top-20"><?php echo app('translator')->get('lang.educational_resources'); ?></h6>
            </div>
            <p class="m-top-20"><?php echo app('translator')->get('lang.resources'); ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="about_bottom_item m-top-20">
            <div class="ab_head">
              <div class="ab_head_icon">
                <i class="icofont icofont-heart"></i>
              </div>
              <h6 class="m-top-20"><?php echo app('translator')->get('lang.user_experience'); ?></h6>
            </div>
            <p class="m-top-20"><?php echo app('translator')->get('lang.experience_description'); ?></p>
          </div>
        </div>
      </div>
    </div><!--End off row-->
  </div><!--End off container -->
</section> <!--End off About section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/CADRICIEL/Eric-Charbonnier-TP2/Maisonneuve2295209/resources/views/welcome.blade.php ENDPATH**/ ?>