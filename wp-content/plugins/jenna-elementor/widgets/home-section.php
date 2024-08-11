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
class BdevsHomeSection extends \Elementor\Widget_Base {

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
		return 'bdevs-home-section';
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
		return __( 'Home Section', 'bdevs-elementor' );
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
		return 'eicon-info-circle';
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
		return [ 'homesection', 'carousel' ];
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
			'section_content_home_section',
			[
				'label' => esc_html__( 'Home Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'Jenna Ortega', 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your title', 'bdevs-elementor' ),
				'default'     => __( "Hay! I'm Jenna", 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'typetext',
			[
				'label'       => __( 'Text TypeIt', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your text typeit', 'bdevs-elementor' ),
				'default'     => __( "I'm a", 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'text_decoration',
			[
				'label'       => __( 'List Text Decoration', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your list text', 'bdevs-elementor' ),
				'default'     => __( "'Designer','Developer'", 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'content',
			[
				'label'       => __( 'Content Right', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your content right', 'bdevs-elementor' ),
				'default'     => __( 'Yet bed any for travelling assistance...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'link_btn',
			[
				'label'       => __( 'Link Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your link button', 'bdevs-elementor' ),
				'default'     => __( '#', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'text_btn',
			[
				'label'       => __( 'Text Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your text button', 'bdevs-elementor' ),
				'default'     => __( '<span>Get in touch</span> <i class="bi-arrow-right"></i>', 'bdevs-elementor' ),
				'label_block' => true,
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
			'tabs',
			[
				'label' => esc_html__( 'Home Section Social Item', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #1', 'bdevs-elementor' ),
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
			'image',
			[
				'label'       => esc_html__( 'Image Right Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload image right section', 'bdevs-elementor' ),
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

<section class="home-section">
	<div class="container">
		<div class="row align-items-center">
			<?php if ('' != $settings['image']['url']) { ?>
				<div class="col-lg-6">
			<?php } else { ?>
				<div class="col-lg-12">
			<?php } ?>
					<div class="hs-text-box">
						<?php if ('' != $settings['heading']): ?>
							<h6>
								<span>
									<?php echo wp_kses_post($settings['heading']); ?>
								</span>
							</h6>
						<?php endif ?>
						<?php if ('' != $settings['title']): ?>
							<h1>
								<?php echo wp_kses_post($settings['title']); ?>
							</h1>
						<?php endif ?>
						<?php if ('' != $settings['typetext']): ?>
							<h2>
								<?php echo wp_kses_post($settings['typetext']); ?>
								<span id="type-it"></span>
							</h2>
						<?php endif ?>
						<?php if ('' != $settings['content']): ?>
							<p class="text"><?php echo wp_kses_post($settings['content']); ?></p>
						<?php endif ?>
						<div class="btn-bar d-flex align-items-sm-center flex-column flex-sm-row">
							<?php if (('' != $settings['link_btn']) && ('' != $settings['text_btn'])): ?>
								<a class="px-btn" href="<?php echo wp_kses_post($settings['link_btn']); ?>">
									<?php echo wp_kses_post($settings['text_btn']); ?>
								</a>
							<?php endif ?>
							<?php if ($settings['show_social'] === 'yes'): ?>
								<div class="social-icon ps-sm-4 pt-4 pt-sm-0 d-flex justify-content-center justify-content-sm-start">
									<?php
									foreach ( $settings['tabs'] as $item ) :
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
				<?php if ('' != $settings['image']['url']): ?>
					<div class="col-lg-6">
						<div class="hs-banner">
							<img src="<?php echo wp_kses_post($settings['image']['url']); ?>" title="" alt="">
						</div>
					</div>
				<?php endif ?>
		</div>
	</div>
</section>

<script type="text/javascript">
	jQuery( document ).ready(function() {
		new TypeIt('#type-it', {
			speed: 200,
			loop: true,
			strings: [<?php echo wp_kses_post($settings['text_decoration']); ?>],
			breakLines: false,
		});	
	});
</script>

<?php
}

}