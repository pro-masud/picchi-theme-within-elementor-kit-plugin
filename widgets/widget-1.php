<?php

class Widget_1 extends \Elementor\Widget_Base{

	public function get_name() {
		return 'hello_world_widget_1';
	}

	public function get_title() {
		return esc_html__( 'Hello World 1', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function register_controls(){
		//Tab Contect Start Now
		$this->start_controls_section(
			'section_title',[
			'label' => esc_html( 'Title', 'elementor-addon'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Hello world', 'elementor-addon' ),
			]
		);

		$this->add_control(
			'aligtment',
			[
				'label' => esc_html__( 'Text Align', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'	=> esc_html( 'Left', 'elementor-addon'),
					'right'	=> esc_html( 'Right', 'elementor-addon'),
					'center'	=> esc_html( 'Center', 'elementor-addon'),
				],
				'selectors'		=> [
					'{{WRAPPER}} h2.header' => 'text-align:{{VALUE}}'
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'header_description',[
			'label' => esc_html( 'Header Description', 'elementor-addon'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		$this->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'lorem ipsam here now', 'elementor-addon' ),
				'placeholder' => esc_html__( 'Description', 'elementor-addon' ),
			]
		);

		$this->add_control(
			'des_align',
			[
				'label' => esc_html__( 'Description Align', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'	=> esc_html( 'Left', 'elementor-addon'),
					'right'	=> esc_html( 'Right', 'elementor-addon'),
					'center'	=> esc_html( 'Center', 'elementor-addon'),
				],
				'selectors' => [
					'{{WRAPPER}} p.description' => 'text-align:{{VALUE}}'
				]
			]);

			$this->add_control(
				'des_widget',[
					'label' => esc_html__( "Width", 'elementor-addon'),
					'type'	=> \Elementor\Controls_manager::TEXT,
					'default'	=> '100%',
					'selectors' => [
						'{{WRAPPER}} p.description'	=> 'width:{{VALUE}}' 
					]
				]
			);

			$this->add_control(
				'des_margin',[
					'label' => esc_html__( "Margin", 'elementor-addon'),
					'type'	=> \Elementor\Controls_manager::TEXT,
					'default'	=> '0px',
					'selectors' => [
						'{{WRAPPER}} p.description'	=> 'margin:{{VALUE}}' 
					]
				]
			);

		//Tab Control End Here Now
		$this->end_controls_section();

		//Start a Tab Style Now
		$this->start_controls_section(
			'section_style',[
				'label' => esc_html( 'Heade Style', 'elementor-addon' ),
				'tab'	=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'h1style',[
				'label' => esc_html__( "Header Color", 'elementor-addon'),
				'type'	=> \Elementor\Controls_manager::COLOR,
				'default'	=> '#000',
				'selectors' => [
					'{{WRAPPER}} h2.header'	=> 'color:{{VALUE}}' 
				]
			]
			);
		$this->end_controls_section();

		

		//Start a Tab Style Now
		$this->start_controls_section(
			'description_style',[
				'label' => esc_html( 'Description Style', 'elementor-addon' ),
				'tab'	=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'des_style',[
				'label' => esc_html__( "Description Color", 'elementor-addon'),
				'type'	=> \Elementor\Controls_manager::COLOR,
				'default'	=> '#000',
				'selectors' => [
					'{{WRAPPER}} p.description'	=> 'color:{{VALUE}}' 
				]
			]
		);
		$this->end_controls_section();
	}

	protected function render() {

		$setting = $this -> get_settings_for_display();
		$setting_title = $setting['title'];
		$setting_description = $setting['description'];
		$this->add_inline_editing_attributes('title','basic');
		$this->add_inline_editing_attributes('description','basic');
		$this -> add_render_attribute('title',[
			'class'		=> 'header'
		]);

		$this -> add_render_attribute('description',[
			'class'		=> 'description'
		]);
		
		
		echo "<h2 " . $this -> get_render_attribute_string('title') . ">" . esc_html($setting_title) . "</h2>";

		echo "<p " . $this -> get_render_attribute_string('description') . ">" . esc_html($setting_description) . "</p>";
		
		
	}

	protected function _content_template(){
		?>
		<h2 class="header">{{{settings.title}}}</h2>
		<p class="description">{{{settings.description}}}</p>
		<?php 
	}
}
