<?php

add_action('wp_enqueue_scripts','remove_parent_style',11);

function remove_parent_style(){
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );
    wp_enqueue_style('understrap-child',get_stylesheet_directory_uri().'/assets/css/bootstrap.css');
    

}