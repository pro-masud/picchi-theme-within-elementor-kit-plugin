<?php

class Picchi_Team extends \Elementor\Widget_Base{

	public function get_name() {
		return 'picchi_team';
	}

	public function get_title() {
		return esc_html__( 'Picchi Team', 'picchi_extrantion' );
	}

	public function get_icon() {
		return 'eicon-heart';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'picchi', 'counter' ];
	}

	protected function register_controls(){
		//Tab Contect Start Now
		$this->start_controls_section(
			'picchi_team',[
			'label' => esc_html( 'Picchi Team', 'picchi_extrantion'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);


		$this->add_control(
			'picchi_image',
			[
				'label' => esc_html__( 'Choose Image', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);



		//header Sub Title
		$this -> add_control('picchi_title',[
			'label'		=> esc_html('Team Mumber Nane', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Your Name', 'picchi_extrantion'),
			'label_block'	=> true,
		]);

		//header Description Title
		$this -> add_control('job_title',[
			'label'		=> esc_html('Job Title', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Job Title', 'picchi_extrantion'),
			'separator'		=> 'after'
		]);


		// team social liks 
		$this-> add_control('facebook_link',[
			'label'			=> esc_html('Facebook Link','picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::URL,
			'default'		=> [
				'url'		=> '#',
			],
			'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),
			'label_block'	=> true,
		]);


		// team social liks 
		$this-> add_control('twitter_link',[
			'label'			=> esc_html('Twitter Link','picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::URL,
			'default'		=> [
				'url'		=> '#',
			],
			'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),
			'label_block'	=> true,
		]);

		$this-> add_control('instagram_link',[
			'label'			=> esc_html('Instagarm Link','picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::URL,
			'default'		=> [
				'url'		=> '#',
			],
			'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),
			'label_block'	=> true,
		]);

		$this-> add_control('picchi_linkedin',[
			'label'			=> esc_html('Linkedin Link','picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::URL,
			'default'		=> [
				'url'		=> '#',
			],
			'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),
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
			'label' => esc_html( 'Font Color', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);


		$this -> add_control('bannar_color',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .single-counter i' => 'color: {{VALUE}}'
			],
		]);


		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'header_styleing',
				'selector'	=> '{{WRAPPER}} .single-counter i',
			]
		);

		




		// sub title 
		$this->add_control(
			'title_sub_heading',[
			'label' => esc_html( 'Number Color', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		$this -> add_control('bannar_sub_color',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .counter' => 'color: {{VALUE}}'
			],
		]);


		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'header_sub_title',
				'selector'	=> '{{WRAPPER}} .counter',
			]
		);



		// description
		$this->add_control(
			'description_heading',[
			'label' => esc_html( 'Title Color', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		$this -> add_control('title_color',[
			'label'		=> esc_html('Title Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h4' => 'color: {{VALUE}}'
			],
		]);


		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'description_style',
				'selector'	=> '{{WRAPPER}} h4',
			]
		);


		
		$this-> end_controls_section();
	}

	protected function render() {

		$settings = $this -> get_settings_for_display();

		$picchi_image = $settings['picchi_image']['url'];
		$picchi_title = $settings['picchi_title'];
		$job_title = $settings['job_title'];
		$facebook_link = $settings['facebook_link']['url'];
		$twitter_link = $settings['twitter_link']['url'];
		$instagram_link = $settings['instagram_link']['url'];
		$picchi_linkedin = $settings['picchi_linkedin']['url'];

	?>

			<div class="single-team">
				<img src="<?php echo $picchi_image; ?>" alt="">
				<div class="team-hover">
					<div class="team-hover-table">
					<div class="team-hover-cell">
						<h4><?php echo $picchi_title; ?></h4>
						<p><?php echo $job_title; ?></p>
						<div class="team-social">
							<a href="<?php echo esc_url($facebook_link); ?>"><i class="fab fa-facebook-f"></i></a>
							<a href="<?php echo esc_url($twitter_link); ?>"><i class="fab fa-twitter"></i></a>
							<a href="<?php echo esc_url($instagram_link); ?>"><i class="fab fa-instagram"></i></a>
							<a href="<?php echo esc_url($picchi_linkedin); ?>"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					</div>
				</div>
			</div>

	<?php
		
	}

	protected function _content_template(){
		?>
	<!-- Counter Area Start -->

	 	<div class="single-team">
			<img src="{{{settings.picchi_image.url}}}" alt="">
	 		<div class="team-hover">
				<div class="team-hover-table">
	 			<div class="team-hover-cell">
	 				<h4>{{{settings.picchi_title}}}</h4>
					<p>{{{settings.job_title}}}</p>
					<div class="team-social">
						<a href="{{{settings.facebook_link.url}}}"><i class="fab fa-facebook-f"></i></a>
						<a href="{{{settings.twitter_link.url}}}"><i class="fab fa-twitter"></i></a>
						<a href="{{{settings.instagram_link.url}}}"><i class="fab fa-instagram"></i></a>
						<a href="{{{settings.picchi_linkedin.url}}}"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
				</div>
	 		</div>
	 	</div>
	   <!-- Counter Area End -->
		
	<?php 
	 }
}
