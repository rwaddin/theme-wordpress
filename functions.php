<?php
function add_theme_script(){
	$baseTheme = get_template_directory_uri();
	
	# csss
	wp_enqueue_style( 'bootstrap', "{$baseTheme}/assets/bootstrap/css/bootstrap.min.css" );
	wp_enqueue_style( 'fontawesome', "{$baseTheme}/assets/fontawesome/css/all.min.css" );
	wp_enqueue_style( 'corecomponent', "{$baseTheme}/assets/core/css/components.min.css" );
	wp_enqueue_style( 'corestyle', "{$baseTheme}/assets/core/css/style.min.css" );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	# js
	wp_enqueue_script("jquery","{$baseTheme}/assets/jquery.min.js");
	wp_enqueue_script("bootstrap","{$baseTheme}/assets/bootstrap/js/bootstrap.min.js","jquery");
	wp_enqueue_script("nicescroll","{$baseTheme}/assets/nicescroll/jquery.nicescroll.min.js","jquery");
	wp_enqueue_script("stisla","{$baseTheme}/assets/core/js/stisla.js","jquery");
	wp_enqueue_script("other","{$baseTheme}/assets/core/js/scripts.js","jquery");
}

add_action("wp_enqueue_scripts","add_theme_script");