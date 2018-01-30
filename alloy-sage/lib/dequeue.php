<?php

namespace Roots\Sage\Posts;

use Roots\Sage\Setup;

// Dequeue Styles
function alloy_dequeue_unnecessary_styles() {
  $alloyDequeueStyles = [
    'woocommerce-layout',
    'woocommerce-smallscreen',
    'woocommerce-general',
    'dashicons',
    'event-tickets-plus-tickets'
  ];
  wp_dequeue_style( $alloyDequeueStyles );
  wp_deregister_style( $alloyDequeueStyles );
}
add_action( 'wp_print_styles', __NAMESPACE__ . '\\alloy_dequeue_unnecessary_styles' );

// Dequeue JavaScripts
function alloy_dequeue_unnecessary_scripts() {
  $alloyDequeueScripts = [
    'aam-login',
    'comment-reply'
  ];
  wp_dequeue_style( $alloyDequeueScripts );
  wp_deregister_style( $alloyDequeueScripts );
}
add_action( 'wp_print_scripts', __NAMESPACE__ . '\\alloy_dequeue_unnecessary_scripts' );
