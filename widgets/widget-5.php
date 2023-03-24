<?php
class Image_demension extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hello_world_widget_5';
	}

	public function get_title() {
		return esc_html__( 'Image width And Height', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-facebook';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'height', 'width' ];
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

		$this-> add_control('images_width_height',[
			'label'		=> __('width And Height','elementor-addon'),
			'type'		=> \Elementor\Controls_manager::IMAGE_DIMENSIONS,
			
			
		]
			
		);

		

		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		
		
	}

	protected function _content_template(){
		
	}
}
