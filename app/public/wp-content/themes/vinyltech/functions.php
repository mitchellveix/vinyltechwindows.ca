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

function vinyltech_register_patterns(){

    register_block_pattern_category(
        'vinyltech',
        array(
            'label' => 'VinylTech'
        )
    );

}

add_action(
    'init',
    'vinyltech_register_patterns'
);

function vinyltech_register_pattern_files(){

    register_block_pattern(
        'vinyltech/hero',
        array(
            'title' => 'VinylTech Hero',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/hero.php'
            )
        )
    );

}

add_action(
    'init',
    'vinyltech_register_pattern_files'
);