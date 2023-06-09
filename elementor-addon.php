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
	require_once( __DIR__ . '/widgets/picchi-heading.php' );
	require_once( __DIR__ . '/widgets/picchi-about-description.php' );
	require_once( __DIR__ . '/widgets/picchi-digital-feacher.php' );
	require_once( __DIR__ . '/widgets/picch-work-process.php' );
	require_once( __DIR__ . '/widgets/picch-project.php' );
	require_once( __DIR__ . '/widgets/picch-counter.php' );
	require_once( __DIR__ . '/widgets/picch-team.php' );
	require_once( __DIR__ . '/widgets/picch-video.php' );
	require_once( __DIR__ . '/widgets/picch-price.php' );
	require_once( __DIR__ . '/widgets/picch-qourt.php' );
	require_once( __DIR__ . '/widgets/picch-lates-post.php' );
	require_once( __DIR__ . '/widgets/picch-button.php' );
	require_once( __DIR__ . '/widgets/picch-address.php' );
	require_once( __DIR__ . '/widgets/picch-contact-box.php' );
	require_once( __DIR__ . '/widgets/picch-company.php' );

	$widgets_manager -> register( new \Header_bannar() );
	$widgets_manager -> register( new \Picchi_heading() );
	$widgets_manager -> register( new \About_Description() );
	$widgets_manager -> register( new \Picchi_Digital() );
	$widgets_manager -> register( new \Picchi_work_process() );
	$widgets_manager -> register( new \Picchi_project() );
	$widgets_manager -> register( new \Picchi_Counter() );
	$widgets_manager -> register( new \Picchi_Team() );
	$widgets_manager -> register( new \Picchi_video() );
	$widgets_manager -> register( new \Picchi_Price_Table() );
	$widgets_manager -> register( new \Picchi_quert() );
	$widgets_manager -> register( new \Picchi_Lates_post() );
	$widgets_manager -> register( new \Picchi_Button() );
	$widgets_manager -> register( new \Picchi_Address() );
	$widgets_manager -> register( new \Picchi_Contact_Box() );
	$widgets_manager -> register( new \Picchi_Company() );
	

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