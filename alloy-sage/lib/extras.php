<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
* Add <body> classes
*/
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
* Clean up the_excerpt()
*/
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/*  Add responsive container to embeds
/* ------------------------------------ */
function alloy_embed_html( $html ) {
  return '<div class="embed-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', __NAMESPACE__ . '\\alloy_embed_html', 10, 3 );

// WooCommerce
// Add Woocommerce support
add_theme_support('woocommerce');

function child_manage_woocommerce_styles() {
  //remove generator meta tag
  remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );

  //first check that woo exists to prevent fatal errors
  if ( function_exists( 'is_woocommerce' ) ) {
    //dequeue scripts and styles
    if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
      wp_dequeue_style( 'woocommerce_frontend_styles' );
      wp_dequeue_style( 'woocommerce_fancybox_styles' );
      wp_dequeue_style( 'woocommerce_chosen_styles' );
      wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
      wp_dequeue_script( 'wc_price_slider' );
      wp_dequeue_script( 'wc-single-product' );
      wp_dequeue_script( 'wc-add-to-cart' );
      wp_dequeue_script( 'wc-cart-fragments' );
      wp_dequeue_script( 'wc-checkout' );
      wp_dequeue_script( 'wc-add-to-cart-variation' );
      wp_dequeue_script( 'wc-single-product' );
      wp_dequeue_script( 'wc-cart' );
      wp_dequeue_script( 'wc-chosen' );
      wp_dequeue_script( 'woocommerce' );
      wp_dequeue_script( 'prettyPhoto' );
      wp_dequeue_script( 'prettyPhoto-init' );
      wp_dequeue_script( 'jquery-blockui' );
      wp_dequeue_script( 'jquery-placeholder' );
      wp_dequeue_script( 'fancybox' );
      wp_dequeue_script( 'jqueryui' );
    }
  }
}
// END WooCommerce
// Move Yoast to bottom
function yoasttobottom() {
  return 'low';
}
add_filter( 'wpseo_metabox_prio', __NAMESPACE__ . '\\yoasttobottom');
