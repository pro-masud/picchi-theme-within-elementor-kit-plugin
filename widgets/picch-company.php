<?php

class Picchi_Company extends \Elementor\Widget_Base{

	public function get_name() {
		return 'picchi_company';
	}

	public function get_title() {
		return esc_html__( 'Picchi Company Slider', 'picchi_extrantion' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'company', 'slider' ];
	}

	protected function register_controls(){
		//Tab Contect Start Now
		$this->start_controls_section(
			'heading_section_title',[
			'label' => esc_html( 'Header', 'picchi_extrantion'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		$project_re = new \Elementor\Repeater();

		// project image
		$project_re -> add_control(
			'project_image',
			[
				'label' => esc_html__( 'Choose Image', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);


		$this->add_control(
			'project_list',
			[
				'label' => esc_html__( 'Repeater List', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $project_re->get_controls(),
				'default' => [
					[
						'list' => esc_html__( 'Choose Project Image', 'picchi_extrantion' ),
					],
				],
				'title_field' => '{{{ project_image }}}',
			]
		);


		

		//Tab Control End Here Now
		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this -> get_settings_for_display();

		if($settings['project_list']){
			
		
	?>

		<div class="section client-area">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="client owl-carousel">
						<?php foreach( $settings['project_list'] as $item){ ?>

							<div class="single-cleint">
								<a href="">
									<img src="<?php echo $item['project_image']['url']; ?>" alt="" />
								</a>
							</div>
							
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php
		}
		
	}
}
