<?php

class Picchi_quert extends \Elementor\Widget_Base{

	public function get_name() {
		return 'picchi_quert';
	}

	public function get_title() {
		return esc_html__( 'Picchi Quert', 'picchi_extrantion' );
	}

	public function get_icon() {
		return 'eicon-wordart';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'work', 'process' ];
	}

	protected function register_controls(){
		//Tab Contect Start Now
		$this->start_controls_section(
			'heading_section_title',[
			'label' => esc_html( 'Header', 'picchi_extrantion'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);


		$this->add_control(
			'quert_icons',
			[
				'label' => esc_html__( 'Picchi Quert Icon', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
			]
		);

		//header Description Title
		$this -> add_control('quert_description',[
			'label'		=> esc_html('Description', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXTAREA,
			'default'		=>  esc_html('Write a Some Text', 'picchi_extrantion'),
			'separator'		=> 'after'
		]);

		$this->add_control(
			'user_image',
			[
				'label' => esc_html__( 'Choose User Image', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this -> add_control('user_title',[
			'label'		=> esc_html('User Nane', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Your Name', 'picchi_extrantion'),
			'label_block'	=> true,
		]);

		$this -> add_control('user_job_title',[
			'label'		=> esc_html('User Nane', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Your Job Title', 'picchi_extrantion'),
			'label_block'	=> true,
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

		$quert_description = $settings['quert_description'];


		$user_image = $settings['user_image']['url'];
		$user_title = $settings['user_title'];
		$user_job_title = $settings['user_job_title'];
	?>

		<div class="testimonilas-area">
			<div class="single-testimonial">
			<?php \Elementor\Icons_Manager::render_icon( $settings['quert_icons'], [ 'aria-hidden' => 'true' ] ); ?>
				<p><?php echo $quert_description; ?></p>
				<div class="authro-info">
					<h4><img src="<?php echo $user_image; ?>" alt="" /><?php echo $user_title; ?> <span><?php echo $user_job_title; ?></span></h4>
				</div>
			</div>
		</div>

	<?php
		
	}
}
