<?php

class Header_bannar extends \Elementor\Widget_Base{

	public function get_name() {
		return 'picchi_bannar';
	}

	public function get_title() {
		return esc_html__( 'Header Bannar', 'picchi_extrantion' );
	}

	public function get_icon() {
		return 'eicon-t-letter';
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
			'label'		=> esc_html('Title', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Title', 'picchi_extrantion'),
		]);

		//header Sub Title
		$this -> add_control('bannar_sub_title',[
			'label'		=> esc_html('Sub Title', 'picchi_extrantion'),
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
			'label'		=> esc_html('Button 1 Text', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'placeholder'	=> esc_html('Type Hear', 'picchi_extrantion'),
			'default'		=> esc_html('Learn More', 'picchi_extrantion'),
			
		]);

		//header Description Title
		$this -> add_control('btn_url',[
			'label'		=> esc_html('Button 1 URL', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::URL,
			'placeholder'	=> esc_html('#', 'picchi_extrantion'),
			'label_block'	=> true,
			'separator'		=> 'after'
		]);


		//header Description Title
		$this -> add_control('btn_two',[
			'label'		=> esc_html('Button 2 Text', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'placeholder'	=> esc_html('Type Hear', 'picchi_extrantion'),
			'default'		=> esc_html('Contact Us', 'picchi_extrantion'),
			
		]);

		//header Description Title
		$this -> add_control('btn_url_two',[
			'label'		=> esc_html('Button 2 URL', 'picchi_extrantion'),
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


		//Button One Styleing here now

		$this->add_control('header_btn',[
			'label'		=> esc_html( 'Button 1','picchi_extrantion'),
			'type'		=> \Elementor\Controls_Manager::HEADING,
		]);

		$this-> start_controls_tabs(
			'style_tabs_s'
		);

		$this-> start_controls_tab(
			'style_normal_tab',
			[
				'label'		=> esc_html('Normal', 'picchi_extrantion'),
			]
		);

		//button 1 color 
		$this -> add_control('btn_one_style',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .box-btn' => 'color: {{VALUE}}'
			],
		]);

		//button 1 Background 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'		=> 'background',
				'types'		=> ['classic','gradient'],
				'exclude'	=> ['image'],
				'selector'	=> '{{WRAPPER}} .box-btn'
			]
			);
		
		//button 1 typography 
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'btn_one',
				'selector'	=> '{{WRAPPER}} .box-btn',
				'separator'		=> 'before'
			]
		);

		//button 1 margin
		$this-> add_control('normal_padding',[
			'label'		=> esc_html( 'Padding', 'picchi_extrantion'),
			'type'		=> \Elementor\Controls_Manager::DIMENSIONS,
			'size_units'	=> ['px','%','em','rem'],
			'selectors'	=> ['{{WRAPPER}} .box-btn' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'],
		]);

		//button 1 padding
		$this-> add_control('normal_border_radius',[
			'label'		=> esc_html( 'Border Radius', 'picchi_extrantion'),
			'type'		=> \Elementor\Controls_Manager::DIMENSIONS,
			'size_units'	=> ['px','%','em','rem'],
			'selectors'	=> ['{{WRAPPER}} .box-btn' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'],
		]);

		$this-> end_controls_tab();



		$this-> start_controls_tab(
			'style_hover_tab',
			[
				'label'		=> esc_html('Hover', 'picchi_extrantion'),
			]
		);

		//button 1 color 
		$this -> add_control('btn_one_hover_style',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .box-btn:hover' => 'color: {{VALUE}}'
			],
		]);

		//button 1 Background 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'		=> 'background_hover',
				'types'		=> ['classic','gradient'],
				'exclude'	=> ['image'],
				'selector'	=> '{{WRAPPER}} .box-btn:hover'
			]
			);
		

		$this-> end_controls_tabs();


		//Button 2 Styleing here now
		$this->add_control('header_btn_two',[
			'label'		=> esc_html( 'Button 2','picchi_extrantion'),
			'type'		=> \Elementor\Controls_Manager::HEADING,
		]);

		$this-> start_controls_tabs(
			'style_tabs_two'
		);

		$this-> start_controls_tab(
			'btn2_style_normal_tab',
			[
				'label'		=> esc_html('Normal', 'picchi_extrantion'),
			]
		);

		//button 1 color 
		$this -> add_control('btn_two_style',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .border-btn' => 'color: {{VALUE}}'
			],
		]);

		//button 1 Background 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'		=> 'background_btn_two',
				'types'		=> ['classic','gradient'],
				'exclude'	=> ['image'],
				'selector'	=> '{{WRAPPER}} .border-btn'
			]
			);
		
		//button 1 typography 
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'btn_two',
				'selector'	=> '{{WRAPPER}} .border-btn',
				'separator'		=> 'before'
			]
		);

		//button 1 margin
		$this-> add_control('normal_padding_btn_two',[
			'label'		=> esc_html( 'Padding', 'picchi_extrantion'),
			'type'		=> \Elementor\Controls_Manager::DIMENSIONS,
			'size_units'	=> ['px','%','em','rem'],
			'selectors'	=> ['{{WRAPPER}} .border-btn' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'],
		]);

		//button 1 padding
		$this-> add_control('normal_border_two_radius',[
			'label'		=> esc_html( 'Border Radius', 'picchi_extrantion'),
			'type'		=> \Elementor\Controls_Manager::DIMENSIONS,
			'size_units'	=> ['px','%','em','rem'],
			'selectors'	=> ['{{WRAPPER}} .border-btn' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'],
		]);

		//button 1 color 
		$this -> add_control('btn_two_border',[
			'label'		=> esc_html('Border Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .border-btn' => 'border-color: {{VALUE}}'
			],
		]);

		

		$this-> end_controls_tab();



		$this-> start_controls_tab(
			'style_hover_tab_two',
			[
				'label'		=> esc_html('Hover', 'picchi_extrantion'),
			]
		);

		//button 1 color 
		$this -> add_control('btn_two_hover_style',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .border-btn:hover' => 'color: {{VALUE}}'
			],
		]);

		//button 1 Background 
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'		=> 'background_hover_two',
				'types'		=> ['classic','gradient'],
				'exclude'	=> ['image'],
				'selector'	=> '{{WRAPPER}} .border-btn:hover'
			]
		);

		
		


		$this-> end_controls_tabs();

		$this-> end_controls_section();
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

	<div id="home" 
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto">
					<div class="welcome-content text-center">
						<h4 class="sub_title"><?php echo $bannar_sub_title ; ?></h4>
						<h2 class="header"><?php echo $heading ; ?></h2>
						<p><?php echo $bannar_description ; ?></p>
						<a  href="<?php echo esc_url($btn_url);  ?>" class="box-btn"><?php echo $btn_one; ?></a>
						<a href="<?php echo esc_url($btn_url_two);  ?>" class="border-btn"><?php echo $btn_two; ?></a>
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
