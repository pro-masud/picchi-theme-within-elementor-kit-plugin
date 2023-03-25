<?php
class font_controls extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hello_world_widget_8';
	}

	public function get_title() {
		return esc_html__( 'Font Styles', 'elementor-addon' );
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
				'label' => esc_html__( 'Font Style', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'demo_popover',[
				'label'		=> __( 'Fonts', 'elementor-addon'),
				'type'		=> \Elementor\Controls_Manager::POPOVER_TOGGLE,
			]
		);

		$this -> start_popover();

			$this->add_control('demo_icons',[
				'label'		=> __( 'Font Family', 'elementor-addon'),
				'type'		=> \Elementor\Controls_Manager::FONT,
				'selectors'	=> [
					'{{WRAPPER}} .p1' => 'font-family:{{VALUE}}',
				]
				
			]);			

			$this->add_control('demo_icons2',[
				'label'		=> __( 'Font Family 2', 'elementor-addon'),
				'type'		=> \Elementor\Controls_Manager::FONT,
				'selectors'	=> [
					'{{WRAPPER}} .p2' => 'font-family:{{VALUE}}',
				]
				
			]);
		$this -> end_popover();

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
