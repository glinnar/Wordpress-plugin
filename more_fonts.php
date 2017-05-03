<?php
/*
Plugin Name: Text fonts
Plugin URI:
Description: Add more text fonts from googleFonts
Author: Gustaf Linnarsson
Author URI:
Version: 0.1
*/

function add_more_fonts(){
  wp_register_syle('googleFonts','https://fonts.googleapis.com/css?family=Crete+Round');
  wp_enqueue_style('googleFonts');
}
add_action('wp_enqueue_scripts','add_more_fonts');
?>
