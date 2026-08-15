<?php
/**
 * Plugin Name: VinylTech Core
 * Description: Custom functionality for VinylTech website.
 * Version: 1.0
 * Author: Mitchell Veix
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function vinyltech_register_window_post_type() {

	register_post_type(
		'window',
		array(
			'labels' => array(
				'name'          => 'Windows',
				'singular_name' => 'Window',
				'add_new_item'  => 'Add New Window',
				'edit_item'     => 'Edit Window',
			),

			'public' => true,

            'show_in_rest' => true,

            'publicly_queryable' => true,

			'menu_icon' => 'dashicons-admin-home',

			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),

			'has_archive' => true,

			'rewrite' => array(
				'slug' => 'windows',
			),
		)
	);

}

add_action(
	'init',
	'vinyltech_register_window_post_type'
);

function vinyltech_acf_field_shortcode($atts) {

	if ( ! function_exists('get_field') ) {
		return '';
	}

	$atts = shortcode_atts(
		array(
			'field' => '',
		),
		$atts
	);

	$value = get_field($atts['field']);

	if (is_array($value)) {
		return implode(', ', $value);
	}

	return $value;

}

add_shortcode(
	'acf_field',
	'vinyltech_acf_field_shortcode'
);


/**
 * Register Gallery taxonomy for Media Library images
 */
function vinyltech_register_media_gallery_taxonomy() {

    $labels = array(
        'name'              => 'Galleries',
        'singular_name'     => 'Gallery',
        'search_items'      => 'Search Galleries',
        'all_items'         => 'All Galleries',
        'parent_item'       => 'Parent Gallery',
        'parent_item_colon' => 'Parent Gallery:',
        'edit_item'         => 'Edit Gallery',
        'update_item'       => 'Update Gallery',
        'add_new_item'      => 'Add New Gallery',
        'new_item_name'     => 'New Gallery Name',
        'menu_name'         => 'Galleries',
    );

    register_taxonomy(
        'media_gallery',
        'attachment',
        array(
            'labels'            => $labels,
            'public'            => false,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'hierarchical'      => true,
            'rewrite'           => false,
        )
    );
}
add_action( 'init', 'vinyltech_register_media_gallery_taxonomy' );


/**
 * Only show Gallery taxonomy for images in the Media Library
 */
function vinyltech_gallery_taxonomy_for_images( $post_type ) {

    if ( $post_type === 'attachment' ) {
        return;
    }

    // This function is intentionally left available
    // for future media-specific filtering.
}
add_action( 'admin_init', 'vinyltech_gallery_taxonomy_for_images' );


/**
 * Random Gallery shortcode
 *
 * Usage:
 * [vinyltech_random_gallery]
 *
 * Optional:
 * [vinyltech_random_gallery count="3" gallery="homepage-gallery"]
 */
function vinyltech_random_gallery_shortcode( $atts ) {

    $atts = shortcode_atts(
        array(
            'count'   => 3,
            'gallery' => 'homepage-gallery',
        ),
        $atts,
        'vinyltech_random_gallery'
    );

    $query = new WP_Query(
        array(
            'post_type'      => 'attachment',
            'post_status'    => 'inherit',
            'post_mime_type' => 'image',
            'posts_per_page' => intval( $atts['count'] ),
            'orderby'        => 'rand',
            'tax_query'      => array(
                array(
                    'taxonomy' => 'media_gallery',
                    'field'    => 'slug',
                    'terms'    => sanitize_title( $atts['gallery'] ),
                ),
            ),
        )
    );

    if ( ! $query->have_posts() ) {
        return '';
    }

    ob_start();
    ?>

    <div class="vinyltech-random-gallery">

        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="vinyltech-random-gallery__item">

                <?php
                echo wp_get_attachment_image(
                    get_the_ID(),
                    'large',
                    false,
                    array(
                        'class' => 'vinyltech-random-gallery__image',
                    )
                );
                ?>

            </div>

        <?php endwhile; ?>

    </div>

    <?php

    wp_reset_postdata();

    return ob_get_clean();
}
add_shortcode(
    'vinyltech_random_gallery',
    'vinyltech_random_gallery_shortcode'
);


/**
 * Styles for the random gallery
 */
function vinyltech_random_gallery_styles() {

    wp_register_style(
        'vinyltech-random-gallery',
        false
    );

    wp_enqueue_style(
        'vinyltech-random-gallery'
    );

    wp_add_inline_style(
		'vinyltech-random-gallery',
		'
		.vinyltech-random-gallery {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			gap: 24px;
		}

		.vinyltech-random-gallery__item {
			position: relative;
			width: 100%;
			height: 180px;
			overflow: hidden;
		}

		.vinyltech-random-gallery__image {
			position: absolute !important;
			inset: 0 !important;
			width: 100% !important;
			height: 100% !important;
			max-width: none !important;
			max-height: none !important;
			display: block !important;
			object-fit: cover !important;
			object-position: center center !important;
		}

		@media (max-width: 781px) {
			.vinyltech-random-gallery {
				grid-template-columns: 1fr;
			}
		}
		'
	);
}
add_action(
    'wp_enqueue_scripts',
    'vinyltech_random_gallery_styles'
);


/**
 * Register Testimonials Custom Post Type
 */
function vinyltech_register_testimonial_post_type() {

    register_post_type(
        'testimonial',
        array(
            'labels' => array(
                'name'                  => 'Testimonials',
                'singular_name'         => 'Testimonial',
                'add_new'               => 'Add New',
                'add_new_item'          => 'Add New Testimonial',
                'edit_item'             => 'Edit Testimonial',
                'new_item'              => 'New Testimonial',
                'view_item'             => 'View Testimonial',
                'search_items'          => 'Search Testimonials',
                'not_found'             => 'No testimonials found',
                'menu_name'             => 'Testimonials',
            ),

            'public'             => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_rest'       => true,
            'menu_icon'          => 'dashicons-format-quote',

            'supports'           => array(
                'title',
                'thumbnail',
            ),

            'has_archive'        => false,
            'rewrite'            => array(
                'slug' => 'testimonials',
            ),
        )
    );
}

add_action(
    'init',
    'vinyltech_register_testimonial_post_type'
);

/**
 * Testimonial Slider Shortcode
 */
function vinyltech_testimonial_slider() {

    $testimonials = new WP_Query(
        array(
            'post_type'      => 'testimonial',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        )
    );

    if ( ! $testimonials->have_posts() ) {
        return '';
    }

    ob_start();

    $total = $testimonials->post_count;
    $index = 0;
    ?>

    <div class="testimonial-slider">

        <div class="testimonial-slides">

            <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>

                <?php
                $quote         = get_field( 'quote' );
                $customer_name = get_field( 'customer_name' );
                $location      = get_field( 'location' );

				$quote = wp_kses_post( $quote );
				$quote = preg_replace( '/^<p>|<\/p>$/', '', trim( $quote ) );
                ?>

                <article
                    class="testimonial-slide <?php echo 0 === $index ? 'is-active' : ''; ?>"
                    data-slide="<?php echo esc_attr( $index ); ?>"
                >

                    <?php if ( $quote ) : ?>
                        <blockquote class="testimonial-quote">
                            <?php echo '<span class="red-quote">“</span>&nbsp;&nbsp;&nbsp;' . $quote; ?>
                        </blockquote>
                    <?php endif; ?>

                    <?php if ( $customer_name ) : ?>
                        <p class="testimonial-name">
                            <?php echo esc_html( $customer_name ); ?>
                        </p>
                    <?php endif; ?>

                    <?php if ( $location ) : ?>
                        <p class="testimonial-location">
                            <?php echo esc_html( $location ); ?>
                        </p>
                    <?php endif; ?>

                </article>

                <?php $index++; ?>

            <?php endwhile; ?>

        </div>

        <div class="testimonial-navigation">

            <button
                type="button"
                class="testimonial-prev"
                aria-label="Previous testimonial"
            >←</button>

            <span class="testimonial-counter"><span class="testimonial-current">1</span> / <span class="testimonial-total"><?php echo esc_html( $total ); ?></span></span>

            <button
                type="button"
                class="testimonial-next"
                aria-label="Next testimonial"
            >→</button>

        </div>

    </div>

    <?php

    wp_reset_postdata();

    return ob_get_clean();
}

add_shortcode(
    'testimonial_slider',
    'vinyltech_testimonial_slider'
);