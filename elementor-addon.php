<?php
/**
 * Plugin Name: Elementor Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-addon
 */

 function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/widget-1.php' );
	require_once( __DIR__ . '/widgets/widget-2.php' );
	require_once( __DIR__ . '/widgets/widget-3.php' );
	require_once( __DIR__ . '/widgets/widget-4.php' );
	require_once( __DIR__ . '/widgets/widget-5.php' );
	require_once( __DIR__ . '/widgets/widget-6.php' );
	require_once( __DIR__ . '/widgets/widget-7.php' );
	require_once( __DIR__ . '/widgets/widget-8.php' );
	require_once( __DIR__ . '/widgets/widget-9.php' );

	$widgets_manager -> register( new \Widget_1() );
	$widgets_manager -> register( new \Widgets_2() );
	$widgets_manager -> register( new \Select3() );
	$widgets_manager -> register( new \Choose_Type() );
	$widgets_manager -> register( new \Image_demension() );
	$widgets_manager -> register( new \ImageGallery() );
	$widgets_manager -> register( new \Icon_controls() );
	$widgets_manager -> register( new \font_controls() );
	$widgets_manager -> register( new \slider_demo() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );





// create a elementor widgets cetagory setup here now

function add_new_widgets_catagory_here_now( $elemnets_manager ){

	$elemnets_manager -> add_category(
		'masud-cat',
		[
			'title' => esc_html__( 'Masud', 'elementor-addon'),
			'icon' => 'fa fa-plug',
		]
	);


}

add_action( 'elementor/elements/categories_registered', 'add_new_widgets_catagory_here_now');