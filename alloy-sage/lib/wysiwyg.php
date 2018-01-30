<?php

namespace Roots\Sage\Posts;

use Roots\Sage\Setup;

// --------------------------------------- /
// Customize wysywig editor
// ---------------------------------------/
// Create custom formats dropdown picker
function alloy_redefine_block_formats( $settings ) {
    $settings['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;';
    return $settings;
}
add_filter('tiny_mce_before_init', __NAMESPACE__ . '\\alloy_redefine_block_formats');
// Add TinyMCE buttons to the first row
function move_mce_buttons_to_top($buttons) {
    $buttons[] = 'hr';
    $buttons[] = 'pastetext';
    $buttons[] = 'removeformat';
    // buttons
    return $buttons;
}
add_filter('mce_buttons', __NAMESPACE__ . '\\move_mce_buttons_to_top');
// Remove buttons from the frist row
function remove_link_button( $buttons ) {
  // Remove the toolbar button for the link plugin
  $remove = array('alignleft', 'alignright', 'read-more', 'wp_more', 'dfw', 'wp_adv', 'wp_more');
  return array_diff( $buttons, $remove );
}
add_filter('mce_buttons', __NAMESPACE__ . '\\remove_link_button', 2000);
// Remove buttons from the Second row row
function myplugin_tinymce_buttons( $buttons ) {
	//Remove the format dropdown select and text color selector
	$remove = array( 'indent', 'outdent', 'forecolor', 'charmap', 'undo', 'redo', 'strikethrough', 'wp_help', 'pastetext', 'removeformat', 'hr');
	return array_diff( $buttons, $remove );
 }
add_filter( 'mce_buttons_2', __NAMESPACE__ . '\\myplugin_tinymce_buttons' );
// --------------------------------------- /
// END Customize wysywig editor
// ---------------------------------------/
