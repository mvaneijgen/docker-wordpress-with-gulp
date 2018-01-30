<?php if( have_rows('content-blocks') ):

  while ( have_rows('content-blocks') ) : the_row();

      if( get_row_layout() == 'content' ):

        get_template_part( 'templates/ACF/ACF','content' );

      elseif( get_row_layout() == 'column_content' ):

        get_template_part( 'templates/ACF/ACF','column_content' );

      elseif( get_row_layout() == 'photo' ):

        get_template_part( 'templates/ACF/ACF','photo' );

      elseif( get_row_layout() == 'quote' ):

        get_template_part( 'templates/ACF/ACF','quote' );

      elseif( get_row_layout() == 'call_to_action' ):

        get_template_part( 'templates/ACF/ACF','call_to_action' );

      elseif( get_row_layout() == 'slideshow' ):

        get_template_part( 'templates/ACF/ACF','slideshow' );

      endif;

  endwhile;

endif;
