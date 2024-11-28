<?php

require __DIR__ . '/vendor/autoload.php';

// /**
//  * To change views dir
//  */
// add_filter('bladepress_views_dir', function () {
// 	return get_stylesheet_directory() . '/templates';
// });

// /**
//  * To change cache dir
//  */
// add_filter('bladepress_cache_dir', function () {
// 	return get_stylesheet_directory() . '/cache';
// });

add_action('wp_enqueue_scripts', 'custom_scripts');

function custom_scripts()
{
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/dist/theme.min.css');
	wp_enqueue_script('script', get_template_directory_uri() . '/dist/theme.min.js', [], '1.0.0', true);
}

add_action('init', ['Rmax\Bladepress\Routes', 'init']);
