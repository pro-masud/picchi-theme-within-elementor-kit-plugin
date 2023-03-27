<?php

class Header_bannar extends \Elementor\Widget_Base{

	public function get_name() {
		return 'picchi_bannar';
	}

	public function get_title() {
		return esc_html__( 'Hello World 1', 'picchi_extrantion' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'bannar', 'world' ];
	}

	protected function register_controls(){
		//Tab Contect Start Now
		$this->start_controls_section(
			'section_title',[
			'label' => esc_html( 'Header', 'picchi_extrantion'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		//header header
		$this -> add_control('bannar_heading',[
			'label'		=> esc_html('Bannar Title', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Title', 'picchi_extrantion'),
		]);

		//header Sub Title
		$this -> add_control('bannar_sub_title',[
			'label'		=> esc_html('Bannar Sub Title', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Write Title', 'picchi_extrantion'),
		]);

		//header Description Title
		$this -> add_control('bannar_description',[
			'label'		=> esc_html('Description', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXTAREA,
			'default'		=>  esc_html('Write a Some Text', 'picchi_extrantion'),
			'separator'		=> 'after'
		]);

		//header Description Title
		$this -> add_control('btn_one',[
			'label'		=> esc_html('Button Text 1', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'placeholder'	=> esc_html('Type Hear', 'picchi_extrantion'),
			'default'		=> esc_html('Learn More', 'picchi_extrantion'),
			
		]);

		//header Description Title
		$this -> add_control('btn_url',[
			'label'		=> esc_html('Button URL 1', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::URL,
			'placeholder'	=> esc_html('#', 'picchi_extrantion'),
			'label_block'	=> true,
			'separator'		=> 'after'
		]);


		//header Description Title
		$this -> add_control('btn_two',[
			'label'		=> esc_html('Button Text 2', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'placeholder'	=> esc_html('Type Hear', 'picchi_extrantion'),
			'default'		=> esc_html('Contact Us', 'picchi_extrantion'),
			
		]);

		//header Description Title
		$this -> add_control('btn_url_two',[
			'label'		=> esc_html('Button URL 2', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::URL,
			'placeholder'	=> esc_html('#', 'picchi_extrantion'),
			'label_block'	=> true
		]);

		

		//Tab Control End Here Now
		$this->end_controls_section();

		//Start a Tab Style Now
		$this->start_controls_section(
			'section_style',[
				'label' => esc_html( 'Bannar Title', 'picchi_extrantion' ),
				'tab'	=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this -> add_control('bannar_color',[
			'label'		=> esc_html('Bannar Title Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h2.header' => 'color: {{VALUE}}'
			],
		]);


		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'header_styleing',
				'selector'	=> '{{WRAPPER}} h2',
			]
		);

		$this->end_controls_section();


		//Start a Tab Style Now
		$this->start_controls_section(
			'sub_title',[
				'label' => esc_html( 'Bannar Sub Title', 'picchi_extrantion' ),
				'tab'	=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this -> add_control('bannar_sub_color',[
			'label'		=> esc_html('Sub Title Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h4' => 'color: {{VALUE}}'
			],
		]);


		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'header_sub_title',
				'selector'	=> '{{WRAPPER}} h4',
			]
		);

		$this->end_controls_section();


		//Start a Tab Style Now
		$this->start_controls_section(
			's_description',[
				'label' => esc_html( 'Description Style', 'picchi_extrantion' ),
				'tab'	=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this -> add_control('descrption_s',[
			'label'		=> esc_html('Description Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} p' => 'color: {{VALUE}}'
			],
		]);


		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'description_style',
				'selector'	=> '{{WRAPPER}} p',
			]
		);

		$this->end_controls_section();


		//Start a Tab Style Now
		$this->start_controls_section(
			'button_style',[
				'label' => esc_html( 'Button Style', 'picchi_extrantion' ),
				'tab'	=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this -> add_control('btn_one_style',[
			'label'		=> esc_html('Button 1', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .box-btn' => 'color: {{VALUE}}'
			],
		]);


		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'btn_one',
				'selector'	=> '{{WRAPPER}} .box-btn',
				'separator'		=> 'before'
			]
		);

		$this -> add_control('btn_two_style',[
			'label'		=> esc_html('Button 2', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .border-btn' => 'color: {{VALUE}}'
			],
			
		]);


		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'btn_two',
				'selector'	=> '{{WRAPPER}} .border-btn',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this -> get_settings_for_display();

		$heading = $settings['bannar_heading'];
		$bannar_sub_title = $settings['bannar_sub_title'];
		$bannar_description = $settings['bannar_description'];

		$btn_one = $settings['btn_one'];
		$btn_url = $settings['btn_url']['url'];
		$btn_two = $settings['btn_two'];
		$btn_url_two = $settings['btn_url_two']['url'];
		?>

	<div id="home">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto">
					<div class="welcome-content text-center">
						<h4 class="sub_title"><?php echo $bannar_sub_title ; ?></h4>
						<h2 class="header"><?php echo $heading ; ?></h2>
						<p><?php echo $bannar_description ; ?></p>
						<a  href="<?php echo $btn_url;  ?>" class="box-btn"><?php echo $btn_one; ?></a>
						<a href="<?php echo $btn_url_two;  ?>" class="border-btn"><?php echo $btn_two; ?></a>
					</div>
				</div>
			</div>
		</div>
	<div>


		<?php
		
	}

	protected function _content_template(){
		?>
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto">
					<div class="welcome-content text-center">
						<h4>{{{settings.bannar_sub_title}}}</h4>
						<h2 class="header">{{{settings.bannar_heading}}}</h2>
						<p>{{{settings.bannar_description}}}</p>
						<a  href="{{{settings.btn_url.url}}}" class="box-btn">{{{settings.btn_one}}}</a>
						<a href="{{{settings.btn_url_two.url}}}" class="border-btn">{{{settings.btn_two}}}</a>
					</div>
				</div>
			</div>
		</div>
		
		<?php 
	}
}
