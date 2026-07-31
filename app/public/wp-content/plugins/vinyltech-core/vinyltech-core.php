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