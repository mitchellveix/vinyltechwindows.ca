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

    wp_enqueue_style(
        'vinyltech/two-column-cards',
        get_template_directory_uri() . '/assets/css/two-column-cards.css',
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'vinyltech/banner',
        get_template_directory_uri() . '/assets/css/banner.css',
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'vinyltech/contact',
        get_template_directory_uri() . '/assets/css/contact.css',
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'vinyltech/testimonials',
        get_template_directory_uri() . '/assets/css/testimonials.css',
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'vinyltech/two-columns-with-icons',
        get_template_directory_uri() . '/assets/css/two-columns-with-icons.css',
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'vinyltech/questions',
        get_template_directory_uri() . '/assets/css/questions.css',
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

    register_block_pattern(
        'vinyltech/two-column-cards',
        array(
            'title' => 'Two Column Cards',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/two-column-cards.php'
            )
        )
    );

    register_block_pattern(
        'vinyltech/banner',
        array(
            'title' => 'Banner',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/banner.php'
            )
        )
    );

    register_block_pattern(
        'vinyltech/contact',
        array(
            'title' => 'Contact',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/contact.php'
            )
        )
    );

    register_block_pattern(
        'vinyltech/gallery',
        array(
            'title' => 'Gallery',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/gallery.php'
            )
        )
    );

    register_block_pattern(
        'vinyltech/testimonials',
        array(
            'title' => 'Testimonials',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/testimonials.php'
            )
        )
    );

    register_block_pattern(
        'vinyltech/two-columns-with-icons',
        array(
            'title' => 'Two Columns with Icons',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/two-columns-with-icons.php'
            )
        )
    );

    register_block_pattern(
        'vinyltech/questions',
        array(
            'title' => 'Questions',
            'content' => file_get_contents(
                get_template_directory() 
                . '/patterns/questions.php'
            )
        )
    );

}

add_action(
    'init',
    'vinyltech_register_pattern_files'
);

function vinyltech_enqueue_testimonial_scripts() {

    wp_enqueue_script(
        'vinyltech-testimonials',
        get_template_directory_uri() . '/assets/js/testimonials.js',
        array(),
        '1.0',
        true
    );
}

add_action(
    'wp_enqueue_scripts',
    'vinyltech_enqueue_testimonial_scripts'
);