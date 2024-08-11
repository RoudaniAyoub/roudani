<?php
$jenna_redux_demo = get_option('redux_demo');
get_header(); ?>
<section class="notfound section-padding text-center dark-bg">
	<div class="v-middle">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<h1>
						<?php if(isset($jenna_redux_demo['404_heading']) && $jenna_redux_demo['404_heading']!=''){?>
						<?php echo htmlspecialchars_decode(esc_attr($jenna_redux_demo['404_heading']));?>
						<?php }else{?>
						<?php echo esc_html__( '404', 'jenna' );
						}?>
					</h1>
					<h2>
						<?php if(isset($jenna_redux_demo['404_title']) && $jenna_redux_demo['404_title']!=''){?>
						<?php echo htmlspecialchars_decode(esc_attr($jenna_redux_demo['404_title']));?>
						<?php }else{?>
						<?php echo esc_html__( 'Page Not Found!', 'jenna' );
						}?>
					</h2>
					<a href="<?php echo esc_url(home_url('/')); ?>" class="col-md-12">
						<button class="button-1 mt-20 px-btn">
							<span>
								<?php if(isset($jenna_redux_demo['404_text_btn'])){?>
									<?php echo esc_attr($jenna_redux_demo['404_text_btn']);?>
								<?php }else{?>
									<?php echo esc_html__( 'Back to home', 'jenna' );?>
								<?php } ?>
							</span>
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(404); ?>