<?php

/* Theme setup */
add_action('after_setup_theme', function() {

	/* Support */
	add_theme_support('post-thumbnails');

	add_theme_support('title-tag');

	add_theme_support('html5', [
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption'
	]);

});

/* Register menus */
add_action('init', function() {

	register_nav_menus([
		'primary' => __('Primary Menu')
	]);

});

/* Disable emojis */
add_action('init', function() {

	remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

});
