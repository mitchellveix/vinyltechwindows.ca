<?php

function vinyltech_styles(){

    wp_enqueue_style(
        'vinyltech-header',
        get_template_directory_uri() . '/assets/css/header.css'
    );

}

add_action(
    'wp_enqueue_scripts',
    'vinyltech_styles'
);