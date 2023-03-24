<?php
class Select3 extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hello_world_widget_4';
	}

	public function get_title() {
		return esc_html__( 'Select a Align Text', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-twitter';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'choose two', 'choose' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Content', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this-> add_control('demo_select_two',[
			'label'		=> __('Choose Type','elementor-addon'),
			'type'		=> \Elementor\Controls_manager::CHOOSE,
			'description'	=> esc_html('Text Align', 'elementor-addon'),
			'label_block'	=> true,
			'toggle'		=> false,
			'options'		=> [
				'left'			=> [
						'title'		=> __('Left', 'elementor-addon'),
						'icon'		=> 'eicon-text-align-left',
				],
				'right'			=> [
					'title'		=> __('Right', 'elementor-addon'),
					'icon'		=> 'eicon-text-align-right',
				],
				'center'		=> [
					'title'		=> __('Center', 'elementor-addon'),
					'icon'		=> 'eicon-text-align-center',
				],
				'justify'		=> [
					'title'		=> __('Justify', 'elementor-addon'),
					'icon'		=> 'eicon-text-align-justify',
				],
			],
			'selectors'		=> [
				'{{WRAPPER}}  h2.head' => "text-align:{{VALUE}}",
			]
		]
			

		);

		

		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
			<h2 class="head">Hello World</h2>
		<?php
	}

	// protected function _content_template(){
		
	// }
}
