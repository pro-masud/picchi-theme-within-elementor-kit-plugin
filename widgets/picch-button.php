<?php

class Picchi_Button extends \Elementor\Widget_Base{

	public function get_name() {
		return 'picchi_button';
	}

	public function get_title() {
		return esc_html__( 'Picchi Button', 'picchi_extrantion' );
	}

	public function get_icon() {
		return 'eicon-meta-data';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'button', 'picchi' ];
	}

	protected function register_controls(){
		//Tab Contect Start Now
		$this->start_controls_section(
			'heading_section_title',[
			'label' => esc_html( 'Header', 'picchi_extrantion'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		//header header
		$this -> add_control('process_title',[
			'label'		=> esc_html('Process Title', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Title', 'picchi_extrantion'),
		]);

		//header Sub Title
		$this -> add_control('process_number',[
			'label'		=> esc_html('Process Number', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::NUMBER,
			'default'		=>  esc_html('Write Title', 'picchi_extrantion'),
		]);

		//header Description Title
		$this -> add_control('process_description',[
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
			'default'		=> 'left',
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
				'{{WRAPPER}}  .single-process' => "text-align:{{VALUE}}",
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

		$process_title = $settings['process_title'];
		$process_number = $settings['process_number'];
		$process_description = $settings['process_description'];
	?>
	
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="subscription">
						<form action="#">
							<input type="text" placeholder="enter your email address" />
							<input type="submit" value="subscribe me" />
						</form>
					</div>
				</div>
			</div>
		</div>
	<?php
		
	}

	
}
