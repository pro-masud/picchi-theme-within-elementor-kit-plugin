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

	$widgets_manager -> register( new \Widget_1() );
	$widgets_manager -> register( new \Widgets_2() );
	$widgets_manager -> register( new \Select3() );
	$widgets_manager -> register( new \Choose_Type() );

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