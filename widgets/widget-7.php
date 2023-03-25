<?php
class Icon_controls extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hello_world_widget_7';
	}

	public function get_title() {
		return esc_html__( 'Font Awosame', 'elementor-addon' );
	}

	public function get_icon() {
		return '';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'font', 'icon' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Add a New Icons', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control('demo_icons',[
			'label'		=> __( 'Icons', 'elementor-addon'),
			'type'		=> \Elementor\Controls_Manager::ICON,
			
			
			
		]);
		

		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this -> get_settings_for_display();
		
		?>
			<i></i>
			
		<?php 
	}

	protected function _content_template(){

		?>
		<# 
			#>
			<i style="font-size: 20px; color: #000;" class="{{{settings.demo_icons}}}"></i>
			<#
		#>


		<?php 
	}
}
