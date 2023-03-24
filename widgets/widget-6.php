<?php
class ImageGallery extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hello_world_widget_5';
	}

	public function get_title() {
		return esc_html__( 'Content', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-table';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'image', 'gallery' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Image Width And Height', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control('gallery_img',[
			'label'		=> __( 'Gallery Image', 'elementor-addon'),
			'type'		=> \Elementor\Controls_Manager::GALLERY,
		]);
		

		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		
		foreach( $settings['gallery_img'] as $setting ){
			echo wp_get_attachment_image($setting['id'],'medium');
		}
		
	}

	protected function _content_template(){
		
	}
}
