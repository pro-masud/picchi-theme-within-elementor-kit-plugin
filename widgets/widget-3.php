<?php
class Select3 extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hello_world_widget_3';
	}

	public function get_title() {
		return esc_html__( 'Select 2 Mulitipul', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-facebook';
	}

	public function get_categories() {
		return [ 'masud-cat' ];
	}

	public function get_keywords() {
		return [ 'select', 'select 2' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Mulipul Select Data', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this-> add_control('demo_select_two',[
			'label'		=> __('Select 2','elementor-addon'),
			'type'		=> \Elementor\Controls_manager::SELECT2,
			'description'	=> esc_html('Multipul Data', 'elementor-addon'),
			'multiple'		=> true,
			'label_block'	=> true,
			'options'	=> [
				'BD'		=> __('Bangladesh','elementor-addon'),
				'ENG'		=> __( 'England', 'elementor-addon'),
				'IND'		=> __( 'India', 'elementor-addon'),
				'UN'		=> __( 'Unitad Kindom', 'elementor-addon'),
				'ASU'		=> __( 'AusTokiya', 'elementor-addon'),
				'NZ'		=> __( 'NewZiland', 'elementor-addon'),
				'AIF'		=> __( 'Afrika', 'elementor-addon'),
			],
		]
			

		);

		

		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$select2Data = $settings['demo_select_two'];
		?>

		<ul>
			<?php if($select2Data){
				foreach( $select2Data as $select ){
					?>
						<li><?php echo $select; ?></li>
					<?php 
				}
			}?>
			
		</ul>

		<?php
	}

	protected function _content_template(){
		?>
			<ul>
				<#
					_.each( settings.demo_select_two, function(select2){
						#>
							<li> {{{select2}}} </li>
						<#
					});
				#>
			</ul>
		<?php 
	}
}
