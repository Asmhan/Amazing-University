<?php

function college_files()
{
  wp_enqueue_style('google_font',  '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font_awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('college_main_styles', get_stylesheet_uri(), NULL, microtime());

}

add_action('wp_enqueue_scripts', 'college_files');

function college_features()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'college_features');


?>
