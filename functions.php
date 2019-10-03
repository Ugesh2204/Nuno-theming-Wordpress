<?php
function nuno_data(){

    wp_enqueue_style('default_styles',get_stylesheet_uri());

    wp_enqueue_style('mycss_file', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700&display=swap', false );

    wp_enqueue_style('bootstrap_file', get_template_directory_uri().'/bootstrap-4.1.3-dist/css/bootstrap.min.css');
    wp_enqueue_style('fixed_file', get_template_directory_uri().'/css/fixed.css');
    wp_enqueue_style('font-awesome_file', get_template_directory_uri().'/lib/font-awesome/css/font-awesome.min.css');


    wp_enqueue_script('jquery.min.js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '1.1', true);
    wp_enqueue_script('bootstrap.min.js', get_template_directory_uri() . '/bootstrap-4.1.3-dist/js/bootstrap.min.js', array(), '1.1', true);
    wp_enqueue_script('bootstrap.min.js', get_template_directory_uri() . '/bootstrap-4.1.3-dist/js/bootstrap.min.js', array(), '1.1', true);
}

add_action('wp_enqueue_scripts','nuno_data');
?>