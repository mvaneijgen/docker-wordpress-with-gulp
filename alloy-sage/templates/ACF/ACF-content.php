<?php $filename = basename(__FILE__, '.php'); ?>

<div class="container <?php echo $filename; ?>">
  <div class="row">
    <div class="col-md-12">
      <?php the_sub_field('content'); ?>
    </div>
  </div>
</div>
