<?php

class Picchi_Price_Table extends \Elementor\Widget_Base{

	public function get_name() {
		return 'picchi_price';
	}

	public function get_title() {
		return esc_html__( 'Picchi Price Table', 'picchi_extrantion' );
	}

	public function get_icon() {
		return 'eicon-cart';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'price', 'table' ];
	}

	protected function register_controls(){
		//Tab Contect Start Now
		$this->start_controls_section(
			'heading_section_title',[
			'label' => esc_html( 'Header', 'picchi_extrantion'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);
		
		$this->add_control(
			'price_switcher',
			[
				'label' => esc_html__( 'Center', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
				'label_on' => esc_html__( 'Show', 'picchi_extrantion' ),
				'label_off' => esc_html__( 'Hide', 'picchi_extrantion' ),				
			]
		);
		//header header
		$this -> add_control('price_title',[
			'label'		=> esc_html('Price Title', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('Title', 'picchi_extrantion'),
		]);

		//header Sub Title
		$this -> add_control('price_number',[
			'label'		=> esc_html('Price Number', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::NUMBER,
			'default'		=>  esc_html('10', 'picchi_extrantion'),
		]);

		//header Description Title
		$this -> add_control('price_description',[
			'label'		=> esc_html('Date/Time', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('', 'picchi_extrantion'),
			'separator'		=> 'after'
		]);



		// items repeater
		$item_repetar = new \Elementor\Repeater();

		$item_repetar->add_control(
			'item_title',
			[
				'label' => esc_html__( 'Add New Price Item', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'List Title' , 'picchi_extrantion' ),
				'label_block' => true,
			]
		);


		$this->add_control(
			'price_repeater',
			[
				'label' => esc_html__( 'Repeater Price Items', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $item_repetar->get_controls(),
				'default' => [
					[
						'item_title' => esc_html__( 'Title #1', 'picchi_extrantion' ),
					],
				],
				'title_field' => '{{{ item_title }}}',
			]
		);


		$this -> add_control('price_btn_text',[
			'label'		=> esc_html('Button Text', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::TEXT,
			'default'		=>  esc_html('', 'picchi_extrantion'),
		]);




		$this-> add_control('price_btn_url',[
			'label'		=> esc_html('Date/Time', 'picchi_extrantion'),
			'label_block'	=> true,
			'type'			=> \Elementor\Controls_Manager::URL,
			'options'		=> ['url'],
			'placeholder' => esc_html__( 'https://your-link.com', 'picchi_extrantion' ),
			'label_block'		=> true,
			'separator'		=> 'after'
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

		$price_switcher = $settings['price_switcher'];
		$price_title = $settings['price_title'];
		$price_number = $settings['price_number'];
		$price_description = $settings['price_description'];

		$price_repeater = $settings['price_repeater'];


		$price_btn_text = $settings['price_btn_text'];
		$price_btn_url = $settings['price_btn_url']['url'];

		if( $price_switcher == 'yes'){
			$center = 'center';
		}else{
			$center = '';
		}
	?>

		<div class="single-price">
			<div class="price-title">
				<h4><?php echo $price_title; ?></h4>
			</div>
			<div class="price-tag <?php echo $center; ?>">
				<h2>$<?php echo $price_number; ?> <span><?php echo $price_description; ?></span></h2>
			</div>
			<div class="price-item">
				<?php if($price_repeater){ 
					?>
				<ul>
					<?php foreach( $price_repeater as $item ){ ?>
					<li><?php echo  $item['item_title']; ?></li>
					<?php  } ?>
				</ul>
				<?php } ?>
			</div>
			<a href="<?php echo esc_url($price_btn_url); ?>" class="box-btn"><?php echo $price_btn_text; ?></a>
		</div>

	<?php
		
	}
}
