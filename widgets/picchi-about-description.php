<?php

class About_Description extends \Elementor\Widget_Base{

	public function get_name() {
		return 'picchi_description';
	}

	public function get_title() {
		return esc_html__( 'Picchi About Description', 'picchi_extrantion' );
	}

	public function get_icon() {
		return 'eicon-animation-text';
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

		//about title
		$this -> add_control('about_title',[
			'label'		=> esc_html('About Title', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Title', 'picchi_extrantion'),
		]);

		//about Description
		$this -> add_control('about_description',[
			'label'		=> esc_html('Description', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXTAREA,
			'default'		=>  esc_html('Write a Some Text', 'picchi_extrantion'),
			'separator'		=> 'after'
		]);

		//about button text
		$this -> add_control('about_btn_text',[
			'label'		=> esc_html('Button Text', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Button Text', 'picchi_extrantion'),
			'separator'		=> 'after'
		]);

		//about button url
		$this -> add_control('btn_url',[
			'label'		=> esc_html('Button URL', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::URL,
			'placeholder'	=> esc_html('#', 'picchi_extrantion'),
			'label_block'	=> true,
			'separator'		=> 'after'
		]);



		//about image
		$this->add_control(
			'about_image',
			[
				'label' => esc_html__( 'Choose Image', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);		



		//fechur box repeater here now
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'feacher_title',
			[
				'label' => esc_html__( 'Feacher Title', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'List Title' , 'picchi_extrantion' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'feacher_des',[
				'label'		=> esc_html__( 'Description', 'picchi_extrantion'),
				'type'		=> \Elementor\Controls_Manager::TEXTAREA,
				'default'	=> esc_html( 'Write To Header', 'picchi_extrantion'),
				'label_block'	=> true,
			]
		);

		$repeater->add_control('feacher_btn_text',[
			'label'		=> esc_html__( 'Button Text','picchi_extrantion'),
			'type'		=> \Elementor\Controls_Manager::TEXT,
			'default'	=> esc_html( 'Rede More', 'picchi_extrantion'),
			'label_block'	=> true,
		]);

		//header Description Title
		$repeater -> add_control('btn_url_two',[
			'label'		=> esc_html('Button URL', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::URL,
			'placeholder'	=> esc_html('#', 'picchi_extrantion'),
			'label_block'	=> true,
		]);


		$this->add_control(
			'feacher_list',
			[
				'label' => esc_html__( 'Feacher Items', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ feacher_box }}}',
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
			'about_title',[
			'label' => esc_html( 'Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		$this -> add_control('about_title_color',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h4' => 'color: {{VALUE}}'
			],
		]);

		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'header_styleing',
				'selector'	=> '{{WRAPPER}} h4',
			]
		);




		// sub title 
		$this->add_control(
			'title_sub_heading',[
			'label' => esc_html( 'About Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		$this -> add_control('descritiop_color',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} p.description' => 'color: {{VALUE}}'
			],
		]);


		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'header_sub_title',
				'selector'	=> '{{WRAPPER}}  p.description',
			]
		);



		
		//Button Styleing here now

		$this->add_control('header_btn',[
			'label'		=> esc_html( 'Button','picchi_extrantion'),
			'type'		=> \Elementor\Controls_Manager::HEADING,
		]);

		$this-> start_controls_tabs(
			'about_btn_style'
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
			'selectors'	=> [
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


		// Feacher box styleing here now

		//Feacher Title here now
		$this->add_control(
			'feacher_title',[
			'label' => esc_html( 'Fecher Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		$this -> add_control('feacher_title_color',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h4.f_title' => 'color: {{VALUE}}'
			],
		]);

		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'feacher_title_typography',
				'selector'	=> '{{WRAPPER}} h4.f_title',
			]
		);


		



		$this-> end_controls_section();
	}

	protected function render() {

		$settings = $this -> get_settings_for_display();

		$about_title = $settings['about_title'];
		$about_description = $settings['about_description'];
		$about_btn_text = $settings['about_btn_text'];
		$btn_url = $settings['btn_url']['url'];
		$about_image = $settings['about_image']['url'];


		

		?>

			<div class="row">
				<div class="col-xl-6">
					<div class="about-text">
						<h4><?php echo $about_title; ?></h4>
						<p class="description"><?php echo $about_description; ?></p>
						<a href="<?php echo esc_url($btn_url); ?>" class="box-btn"><?php echo $about_btn_text; ?></a>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="about-img">
						<img src="<?php echo esc_url($about_image); ?>" alt="" />
					</div>
				</div>
			</div>

			<div class="row pt-100">
				<?php if($settings['feacher_list']){ 
						foreach( $settings['feacher_list'] as $feacher_item):
					?>
				<div class="col-xl-4">
					<div class="single-about">
						<i class="far fa-newspaper"></i>
						<h4 class="f_title"><?php echo $feacher_item['feacher_title']; ?></h4>
						<p class="f_desc"><?php echo $feacher_item['feacher_des']; ?></p>
						<a class="f_btn" href="<?php echo $feacher_item['btn_url_two']['url']; ?>"><?php echo $feacher_item['feacher_btn_text']; ?> <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
				<?php
						endforeach;
					}
				?>
			</div>


		<?php
		
	}

	protected function _content_template(){
		?>
		<div class="row">
			<div class="col-xl-6">
				<div class="about-text">
					<h4>{{{settings.about_title}}}</h4>
					<p class="description">{{{settings.about_description}}}</p>
					<a href="{{{settings.btn_url.url}}}" class="box-btn">{{{settings.about_btn_text}}}</a>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="about-img">
					<img src="{{{settings.about_image.url}}}" alt="" />
				</div>
			</div>
		</div>
		
		<# if ( settings.feacher_list.length ) { #>
		<div class="row pt-100">
			<#
				_.each( settings.feacher_list, function( item ) { 
			#>
				<div class="col-xl-4">
					<div class="single-about">
						<i class="far fa-newspaper"></i>
						<h4>{{{item.feacher_title}}}</h4>
						<p>{{{item.feacher_des}}}</p>
						<a href="{{{item.btn_url_two.url}}}">{{{item.feacher_btn_text}}} <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
				<# }); #>
		</div>

		<#	} #>
		
		<?php 
	}
}
