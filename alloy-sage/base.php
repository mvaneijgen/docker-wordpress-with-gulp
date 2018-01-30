<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <?php get_template_part('templates/content-svg'); ?>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap" role="document">
      <main>
        <?php include Wrapper\template_path(); ?>
      </main><!-- /.main -->
    </div><!-- /.wrap -->
    <div id="alloy-cookies-container">
      <strong><?php _e('Cookies', 'sage') ?></strong> <?php _e('are information stored automatically on a website user’s computer. When a user views MicroPort Orthopedics’s website(s), MicroPort Orthopedics may store some data on the user’s computer in the form of a “cookie” to automatically recognize the user upon future visits to MicroPort Orthopedics’s website(s). This Cookie Statement is part of our Privacy Policy.', 'sage') ?>
       <a href="<?php echo site_url(); ?>/privacy">View our full Privacy Policy.</a>
      <button><span>✖</span> <?php _e('Sluit', 'sage') ?></button>
    </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
