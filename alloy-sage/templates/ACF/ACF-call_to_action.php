<?php $filename = basename(__FILE__, '.php');
$alloylink = get_sub_field('link'); ?>
<div class="container--full <?= $filename ?>">
  <?php if( get_sub_field('icon') ):
    $chosenIcon = get_sub_field('icon'); ?>
    <div class="bg-icon-row" style="background-image: url(<?= get_template_directory_uri(); ?>/dist/images//cta-icons/cta-icon-<?php echo $chosenIcon ?>.png)"></div>
  <?php endif; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 <?php echo $filename; ?> background--base">
        <div class="<?php echo $filename; ?>__inner centered">
          <h2><?php the_sub_field('text'); ?></h2>
          <?php if( get_sub_field('link_or_form') == "link" ): ?>

            <a class="btn" href="<?php echo $alloylink['url']; ?>" <?php echo $alloylink['target'] ? 'target="_blank"' : '' ; ?> ><?php echo $alloylink['title']; ?></a>

            <?php
          else: ?>

          <div class="alloy-cta-form">
            <?php
            $whichForm = get_sub_field('form');
            if ($whichForm == "Contact us") {
              echo do_shortcode('[gravityform id=1 title=false]');
            } elseif ($whichForm == "Newsletter") {
              echo do_shortcode('[gravityform id=2 title=false]');
            } ?>
          </div>
        <?php endif; ?>

      </div>
    </div>

  </div>
</div>
</div>
