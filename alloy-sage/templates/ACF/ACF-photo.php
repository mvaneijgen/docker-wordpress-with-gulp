<?php
$filename = basename(__FILE__, '.php');
$thefieldImgWidth = get_sub_field('wide_or_narrow');
$img = get_sub_field('image');
?>
<div class="container--full">
  <div class="<?php echo $filename ?> <?php echo $thefieldImgWidth == 'Narrow' ? 'narrowimage' : '' ; ?>">
    <img
    width="<?php echo $img['width'] ?>"
    height="<?php echo $img['height'] ?>"
    class="alloy-image"
    src="<?php echo $img['url']; ?>"
    sizes="(max-width: <?php echo $img['width'] ?>px), 100vw, <?php echo $img['width'] ?>px"
    srcset="
    <?php echo $img['url']; ?> <?php echo $img['width'] ?>w,
    <?php echo $img['sizes']['medium']; ?> 300w,
    <?php echo $img['sizes']['medium_large']; ?> 768w,
    <?php echo $img['sizes']['large']; ?> 1024w"
    alt="<?php echo $img['alt']; ?>" />
  </div>
</div>
<?php if( get_sub_field('caption') ): ?>
  <div class="container alloy-photo-caption-container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <?php the_sub_field('caption'); ?>
      </div>
    </div>
  </div>
<?php endif; ?>
