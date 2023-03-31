<?php

class Picchi_heading extends \Elementor\Widget_Base{

	public function get_name() {
		return 'picchi_heading';
	}

	public function get_title() {
		return esc_html__( 'Picchi Heading', 'picchi_extrantion' );
	}

	public function get_icon() {
		return 'eicon-wordart';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'heading', 'title' ];
	}

	protected function register_controls(){
		//Tab Contect Start Now
		$this->start_controls_section(
			'heading_section_title',[
			'label' => esc_html( 'Header', 'picchi_extrantion'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		//header header
		$this -> add_control('heading_title',[
			'label'		=> esc_html('Title', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Title', 'picchi_extrantion'),
		]);

		//header Sub Title
		$this -> add_control('heading_sub_title',[
			'label'		=> esc_html('Sub Title', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Write Title', 'picchi_extrantion'),
		]);

		//header Description Title
		$this -> add_control('heading_description',[
			'label'		=> esc_html('Description', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXTAREA,
			'default'		=>  esc_html('Write a Some Text', 'picchi_extrantion'),
			'separator'		=> 'after'
		]);


		$this-> add_control('heading_text_align',[
			'label'		=> __('Text Alignment','picchi_extrantion'),
			'type'		=> \Elementor\Controls_manager::CHOOSE,
			'description'	=> esc_html('Text Align', 'picchi_extrantion'),
			'label_block'	=> true,
			'default'		=> 'center',
			'toggle'		=> false,
			'options'		=> [
				'left'			=> [
						'title'		=> __('Left', 'picchi_extrantion'),
						'icon'		=> 'eicon-text-align-left',
				],
				'right'			=> [
					'title'		=> __('Right', 'picchi_extrantion'),
					'icon'		=> 'eicon-text-align-right',
				],
				'center'		=> [
					'title'		=> __('Center', 'picchi_extrantion'),
					'icon'		=> 'eicon-text-align-center',
				],
			],
			'selectors'		=> [
				'{{WRAPPER}}  .section-title' => "text-align:{{VALUE}}",
			]
		]
			

		);

		

		//Tab Control End Here Now
		$this->end_controls_section();



		//Start a Tab Style Now
		$this->start_controls_section(
			'section_style',[
				'label' => esc_html( 'Style', 'picchi_extrantion' ),
				'tab'	=> \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_heading',[
			'label' => esc_html( 'Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);


		$this -> add_control('bannar_color',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h2' => 'color: {{VALUE}}'
			],
		]);


		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'header_styleing',
				'selector'	=> '{{WRAPPER}} h2',
			]
		);

		




		// sub title 
		$this->add_control(
			'title_sub_heading',[
			'label' => esc_html( 'Sub Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		$this -> add_control('bannar_sub_color',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
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

		





		// description
		$this->add_control(
			'description_heading',[
			'label' => esc_html( 'Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		$this -> add_control('descrption_s',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
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


		// border color
		$this->add_control(
			'border_color',[
			'label' => esc_html( 'Border Color', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		$this -> add_control('border_before',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .section-title h2::before' => 'background-color: {{VALUE}}'
			],
		]);

		$this -> add_control('border_after',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .section-title h2::after' => 'background-color: {{VALUE}}'
			],
		]);


		



		$this-> end_controls_section();
	}

	protected function render() {

		$settings = $this -> get_settings_for_display();

		$heading_title = $settings['heading_title'];
		$heading_sub_title = $settings['heading_sub_title'];
		$heading_description = $settings['heading_description'];
		?>

		<div class="section-title">
			<h4><?php echo $heading_sub_title; ?></h4>
			<h2><?php echo $heading_title; ?></h2>
			<p><?php echo $heading_description; ?></p>
		</div>


		<?php
		
	}

	protected function _content_template(){
		?>
		<div class="section-title">
			<h4>{{{settings.heading_sub_title}}}</h4>
			<h2>{{{settings.heading_title}}}</h2>
			<p>{{{settings.heading_description}}}</p>
		</div>
		
		<?php 
	}
}
