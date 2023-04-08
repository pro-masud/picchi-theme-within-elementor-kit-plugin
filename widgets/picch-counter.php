<?php

class Picchi_Counter extends \Elementor\Widget_Base{

	public function get_name() {
		return 'picchi_counter';
	}

	public function get_title() {
		return esc_html__( 'Picchi Counter', 'picchi_extrantion' );
	}

	public function get_icon() {
		return 'eicon-number-field';
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
			'heading_section_title',[
			'label' => esc_html( 'Counter Section', 'picchi_extrantion'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);



		$counter_repetar = new \Elementor\Repeater();

		$counter_repetar->add_control(
			'picchi_icons',
			[
				'label' => esc_html__( 'Picchi Icon', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
			]
		);



		//header Sub Title
		$counter_repetar -> add_control('picchi_counter_number',[
			'label'		=> esc_html('Counter Number', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::NUMBER,
			'default'		=>  esc_html('00', 'picchi_extrantion'),
			'label_block'	=> true,
		]);

		//header Description Title
		$counter_repetar -> add_control('picchi_title',[
			'label'		=> esc_html('Picchi Counter Title', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Add New Couter', 'picchi_extrantion'),
			'separator'		=> 'after'
		]);

		$this->add_control(
			'counter_list',
			[
				'label' => esc_html__( 'Picchi Repetar', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $counter_repetar->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'Title #1', 'picchi_extrantion' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'picchi_extrantion' ),
					],
				],
				'title_field' => '{{{ picchi_title }}}',
			]
		);


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
				'{{WRAPPER}}  .single-counter' => "text-align:{{VALUE}}",
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

		$counter_list = $settings['counter_list'];
		
	?>

		<!-- Counter Area Start -->
		<div class="container">
		  	<div class="row">
				<?php if( $counter_list ){ 
					foreach( $counter_list as $item ){
					?>
					<div class="col-xl-3">
						<div class="single-counter">
						<?php \Elementor\Icons_Manager::render_icon( $item['picchi_icons'], [ 'aria-hidden' => 'true' ] ); ?>
							<h4><span class="counter"><?php echo $item['picchi_counter_number']; ?></span> <?php echo $item['picchi_title']; ?></h4>
						</div>
					</div>
				<?php 
						} 
					}
				?>
		  	</div>
		</div>
	  <!-- Counter Area End -->

	<?php
		
	}

	protected function _content_template(){
		?>
		<!-- Counter Area Start -->

		<# if ( settings.counter_list.length ) {
			var counterIcon = elementor.helpers.renderIcon( view, settings.selected_icon, { 'aria-hidden': true }, 'i' , 'object' );
			#>
		  <div class="container">
		  	<div class="row">
			  <# _.each( settings.counter_list, function( item ) { 
			
				#>
		  		<div class="col-xl-3">
					<div class="single-counter">
						{{{counterIcon.value}}}
						<h4><span class="counter">{{{item.picchi_counter_number}}}</span> {{{item.picchi_title}}}</h4>
					</div>
				</div>
				<# }); #>
		  	</div>
		  </div>
		  <# } #>
	  <!-- Counter Area End -->
		
		<?php 
	}
}
