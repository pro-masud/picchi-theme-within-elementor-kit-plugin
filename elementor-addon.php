<?php
/**
 * Plugin Name: Elementor Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: picchi_extrantion
 */

 function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/picchi-bannar.php' );

	$widgets_manager -> register( new \Header_bannar() );
	

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