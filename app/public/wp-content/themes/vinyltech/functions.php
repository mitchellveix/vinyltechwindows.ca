<?php

function vinyltech_styles(){

    wp_enqueue_style(
        'vinyltech-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'vinyltech-header',
        get_template_directory_uri() . '/assets/css/header.css',
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'vinyltech-footer',
        get_template_directory_uri() . '/assets/css/footer.css',
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'vinyltech-hero',
        get_template_directory_uri() . '/assets/css/hero.css',
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'vinyltech/content-image-right',
        get_template_directory_uri() . '/assets/css/content-image-right.css',
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'vinyltech/four-columns-with-icons',
        get_template_directory_uri() . '/assets/css/four-columns-with-icons.css',
        [],
        wp_get_theme()->get('Version')
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
            'title' => 'Hero',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/hero.php'
            )
        )
    );

    register_block_pattern(
        'vinyltech/four-columns-with-icons',
        array(
            'title' => 'Four Columns with Icons',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/four-columns-with-icons.php'
            )
        )
    );

    register_block_pattern(
        'vinyltech/content-image-right',
        array(
            'title' => 'Content + Image Right',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/content-image-right.php'
            )
        )
    );

}

add_action(
    'init',
    'vinyltech_register_pattern_files'
);