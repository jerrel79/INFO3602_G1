<?php
 function university_files(){
 wp_enqueue_style('style',get_stylesheet_uri());
 wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/
4.7.0/css/font-awesome.min.css');
wp_enqueue_style('custom-google-font','https://fonts.googleapis.com/css?
family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,
700,700i');
wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'),NULL, '1.0',true);
 //nickname for stylesheet,
 }

 function university_features(){
    add_theme_support('title-tag');
}
 add_action('wp_enqueue_scripts', 'university_files');
 add_action('after_setup_theme', 'university_features');
 // type of instruction for WordPress to run, function name to run
?> 