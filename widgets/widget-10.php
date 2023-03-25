<?php
class Typography_controls extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hello_world_widget_10';
	}

	public function get_title() {
		return esc_html__( 'Content Typography', 'elementor-addon' );
	}

	public function get_icon() {
		return '';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'fonts', 'typogarphy' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
				[
					'label' => esc_html__( 'Fonts Style', 'elementor-addon' ),
					'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		 
		$this-> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label'		=> esc_html( 'Fonts Typography', 'elementor-addon'),
				'name'		=> 'demo_typography',
				'scheme'	=> \Elementor\Scheme_Typography::TYPOGRPHY_1,
				'selector'	=> '{{WRAPPER}} .p1',
			]
		);




		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this -> get_settings_for_display();
		?>
			<p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quam ipsum, nostrum eius vitae omnis tempore ratione cumque voluptatem sapiente?</p>
			<p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, suscipit facilis odit explicabo ratione praesentium maiores! Voluptas cumque ipsa voluptatum accusamus officia, ut harum unde, illo dolorum molestiae eveniet? Nisi est voluptatibus placeat adipisci doloremque sapiente, corporis labore voluptates in.</p>
		<?php 
	}

	protected function _content_template(){

		?>
			<p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quam ipsum, nostrum eius vitae omnis tempore ratione cumque voluptatem sapiente?</p>
			<p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, suscipit facilis odit explicabo ratione praesentium maiores! Voluptas cumque ipsa voluptatum accusamus officia, ut harum unde, illo dolorum molestiae eveniet? Nisi est voluptatibus placeat adipisci doloremque sapiente, corporis labore voluptates in.</p>
		<?php 
		
	}
}
