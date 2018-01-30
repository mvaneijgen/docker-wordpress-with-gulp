<?php
  $filename = basename(__FILE__, '.php');

  $allowed_classnames = array(
    1 => 'col-md-8 offset-md-2',
    2 => 'col-md-6 col-sm-6',
    3 => 'col-md-4 col-sm-4',
    4 => 'col-md-3 col-sm-6'
  );
  $number_of_cols = count( get_sub_field( 'columns' ) );

  $classname_to_use = $allowed_classnames[1];

  if ( array_key_exists( $number_of_cols, $allowed_classnames ) ) {
      // set the classname to be used
      $classname_to_use = $allowed_classnames[$number_of_cols];
  }
?>

<div class="container--full <?php echo $filename?>">
  <div class="container">
    <div class="row">
      <?php
        if( have_rows('columns') ):
        while ( have_rows('columns') ) : the_row(); ?>

          <div class="<?php echo esc_attr( $classname_to_use ); ?>">
            <?php the_sub_field('column'); ?>
          </div>

      <?php
        endwhile;
        endif;
      ?>
    </div>
  </div>
</div>
