<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() 
{
    wp_enqueue_style( 'silvia', get_template_directory_uri().'/style.css' );
}

function add_oembed_soundcloud()
{
    wp_oembed_add_provider( 'http://soundcloud.com/*', 'http://soundcloud.com/oembed' );
}

add_action('init','add_oembed_soundcloud');
?>
