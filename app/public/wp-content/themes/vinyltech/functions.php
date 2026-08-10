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
        'vinyltech-features',
        get_template_directory_uri() . '/assets/css/features.css',
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'vinyltech/two-column-product-cards',
        get_template_directory_uri() . '/assets/css/two-column-product-cards.css',
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
        'vinyltech/features',
        array(
            'title' => 'Features',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/features.php'
            )
        )
    );

    register_block_pattern(
        'vinyltech/two-column-product-cards',
        array(
            'title' => 'Two Column Product Cards',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/two-column-product-cards.php'
            )
        )
    );

}

add_action(
    'init',
    'vinyltech_register_pattern_files'
);