<?php $filename = basename(__FILE__, '.php'); ?>

<div class="container--full background--base">
  <div class="container <?php echo $filename; ?>">
    <div class="row">
      <div class="col-md-12">
        <blockquote cite="<?php the_sub_field('link'); ?>">
          <?php if( get_field('link') ):
            $alloylink = get_field('link'); ?>
            <a href="<?php echo $alloylink['url']; ?>" <?php echo $alloylink['target'] ? 'target="_blank"' : '' ; ?> ><?php the_sub_field('text'); ?></a>
            <?php
          else: ?>
          <blockquote cite="<?php echo $alloylink['url']; ?>">
            <?php the_sub_field('text'); ?>
          </blockquote>

        <?php endif; ?>
      </blockquote>
      <?php if( get_sub_field('caption') ): ?>
        <p class="ACF-quote-caption"><?php the_sub_field('caption'); ?></p>
      <?php endif; ?>
      </div>
    </div>
  </div>
</div>
