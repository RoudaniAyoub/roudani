<?php
namespace BdevsElementor\Widget;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

/**
 * Bdevs Elementor Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class BdevsContactForm extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Bdevs Elementor widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'bdevs-contact-form';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Bdevs Elementor widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Contact Form', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Slider widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Slider widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'bdevs-elementor' ];
	}

	public function get_keywords() {
		return [ 'contactform', 'carousel' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	// BDT Position
	protected function element_pack_position() {
		$position_options = [
			''              => esc_html__('Default', 'bdevs-elementor'),
			'top-left'      => esc_html__('Top Left', 'bdevs-elementor') ,
			'top-center'    => esc_html__('Top Center', 'bdevs-elementor') ,
			'top-right'     => esc_html__('Top Right', 'bdevs-elementor') ,
			'center'        => esc_html__('Center', 'bdevs-elementor') ,
			'center-left'   => esc_html__('Center Left', 'bdevs-elementor') ,
			'center-right'  => esc_html__('Center Right', 'bdevs-elementor') ,
			'bottom-left'   => esc_html__('Bottom Left', 'bdevs-elementor') ,
			'bottom-center' => esc_html__('Bottom Center', 'bdevs-elementor') , 
			'bottom-right'  => esc_html__('Bottom Right', 'bdevs-elementor') ,
		];

		return $position_options;
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_content_contact_form',
			[
				'label' => esc_html__( 'Contact Form', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'title',
			[
				'label'       => __( 'Title Form', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your text title', 'bdevs-elementor' ),
				'default'     => __( "Let's Discuss Your Project", 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label'       => __( 'SubTitle Form', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your text subtitle', 'bdevs-elementor' ),
				'default'     => __( 'Always available for freelancing if the right project...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'img_info',
			[
				'label'       => esc_html__( 'Contact Image Info', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload contact image info', 'bdevs-elementor' ),
			]	
		);
		$this->add_control(
			'tabs1',
			[
				'label' => esc_html__( 'Contact Form Info', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide Contact Form Info', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'title_item',
						'label'       => esc_html__( 'Title Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'link_item',
						'label'       => esc_html__( 'Link Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '#' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'content_item',
						'label'       => esc_html__( 'Content Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);
		$this->add_control(
			'show_social',
			[
				'label'       => __( 'Show Social', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value'=> 'yes',
				'default'     => __( 'yes', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'tabs2',
			[
				'label' => esc_html__( 'Contact Form Social', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide Contact Form Social', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'text_color',
						'label'       => esc_html__( 'Text Color', 'bdevs-elementor' ),
						'type'        => Controls_Manager::COLOR,
						'default'     => esc_html__( '#1877F2' , 'bdevs-elementor' ),
					],
					[
						'name'        => 'link_item',
						'label'       => esc_html__( 'Link Social Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'icon_item',
						'label'       => esc_html__( 'Icon Social Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);
		$this->add_control(
			'shortcode',
			[
				'label'       => __( 'Shortcode Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your shortcode text', 'bdevs-elementor' ),
				'default'     => __( '[contact-form-7 id="191" title="Contact Form"]', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		
		


		
		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_layout',
			[
				'label' => esc_html__( 'Layout', 'bdevs-elementor' ),
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label'   => esc_html__( 'Alignment', 'bdevs-elementor' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-justify',
					],
				],
				'prefix_class' => 'elementor%s-align-',
				'description'  => 'Use align to match position',
				'default'      => 'left',
			]
		);



		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display();
		extract($settings);
		?> 

<section class="section contactus-section">
	<div class="container">
		<div class="contactus-box rounded oveflow-hidden gray-bg">
			<div class="row g-0 p-4 p-lg-5">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
					<div class="contactus-title">
						<?php if ('' != $settings['title']): ?>
							<h5><?php echo wp_kses_post($settings['title']); ?></h5>
						<?php endif ?>
						<?php if ('' != $settings['subtitle']): ?>
							<p class="m-0"><?php echo wp_kses_post($settings['subtitle']); ?></p>
						<?php endif ?>
					</div>
				</div>
			</div>
			<div class="row g-0 contactus-form p-4 p-lg-5 flex-row-reverse">
				<div class="col-lg-8">
					<div class="contact-form">
						<?php echo do_shortcode($settings['shortcode']); ?>
					</div>
				</div>
				<div class="col-lg-4 pe-md-5">
					<?php if ('' != $settings['img_info']['url']): ?>
						<div class="contact-banner d-none d-lg-block">
							<img src="<?php echo wp_kses_post($settings['img_info']['url']); ?>" title="" alt="">
						</div>
					<?php endif ?>
					<div class="contact-info">
						<?php
						foreach ( $settings['tabs1'] as $item ) :
						?>
							<div class="contact-info-in">
								<?php if ('' != $item['title_item']): ?>
									<label><?php echo wp_kses_post($item['title_item']); ?></label>
								<?php endif ?>
								<?php if (('' != $item['link_item']) && ('' != $item['content_item'])): ?>
									<a href="<?php echo wp_kses_post($item['link_item']); ?>">
										<?php echo wp_kses_post($item['content_item']); ?>
									</a>
								<?php endif ?>
							</div>
						<?php endforeach; ?>
					</div>
					<?php if ($settings['show_social'] === 'yes'): ?>
						<div class="social-icon">
							<?php
							foreach ( $settings['tabs2'] as $item ) :
							?>
								<a style="background: <?php echo wp_kses_post($item['text_color']); ?>;" href="<?php echo wp_kses_post($item['link_item']); ?>">
									<?php echo wp_kses_post($item['icon_item']); ?>
								</a>
							<?php endforeach; ?>
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
}

}