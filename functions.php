<?php

/**
 * @package WordPress
 * @subpackage vurree
 * @since 1.0
 */

define('THE_DIR', __DIR__);

/* Require things */
require_once __DIR__ . '/includes/filters.php';
require_once __DIR__ . '/includes/actions.php';
require_once __DIR__ . '/includes/functions.php';

/* Assets */
the_asset('css', 'reset.css', true);
the_asset('css', 'style.css', true);
the_asset('js', 'jquery.js', true);
the_asset('js', 'vurr.js', true);

/* Queries */
$work = new WP_Query([
	'post_type' => 'bcpt_work',
	'posts_per_page' => 9999
]);

$testimonials = new WP_Query([
	'post_type' => 'bcpt_testimonial',
	'posts_per_page' => 9999
]);
