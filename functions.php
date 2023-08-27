<?php
if (!isset($content_width)) {
	$content_width = 654;
}




function theme_support()
{
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	add_image_size('featured-image', 500, 315, false);
}


add_action('after_setup_theme', 'theme_support');


function skeleton_styles()
{



}

add_action('wp_enqueue_scripts', 'skeleton_theme');


// This theme uses wp_nav_menu() in two locations.
register_nav_menu('primary', 'primary');

//adding walker class to functions for responsive
require_once dirname(__File__) . '/wp_nav_walker.php';



// hook plugins into theme
function skeleton_widgets_init()
{
	register_sidebar(array(
		'name' => __('1st Widget', 'mondeal'),
		'id' => 'widget-1',
		'before_widget' => '<div class="main-widgets">',
		'after_widget' => '</div>',

		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));

	register_sidebar(array(
		'name' => __('2nd  Widget', 'mondeal'),
		'id' => 'widget-2',
		'before_widget' => '<div class="main-widgets">',
		'after_widget' => '</div>',

		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));

	register_sidebar(array(
		'name' => __('3rd  Widget', 'mondeal'),
		'id' => 'widget-3',
		'before_widget' => '<div class="main-widgets">',
		'after_widget' => '</div>',

		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));

	register_sidebar(array(
		'name' => __('Footer  Widget', 'mondeal'),
		'id' => 'widget-footer',
		'before_widget' => '<div class="main-widgets">',
		'after_widget' => '</div>',

		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));
}

add_action('widgets_init', 'skeleton_widgets_init');


// excerpt more section
function new_excerpt_length($length)
{
	return 60;
}
add_filter('excerpt_length', 'new_excerpt_length', 999);

function new_excerpt_more($more)
{
	return '<br><br> <a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __(' <span class="fa fa-arrow-circle-right"></span> Read More', 'your-text-domain') . '</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');


