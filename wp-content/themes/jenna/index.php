<?php
$jenna_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php if(isset($jenna_redux_demo['blog_bg_light']['url']) && $jenna_redux_demo['blog_bg_light']['url'] != ''){?>
<section class="section bg-dark bg-theme" data-img-url="<?php echo esc_url($jenna_redux_demo['blog_bg_light']['url']); ?>">
<?php }else{?>
<section class="section bg-dark bg-theme">
<?php }?>	
	<div class="container">
		<div class="pt-70 section-heading text-center">
			<?php if(isset($jenna_redux_demo['blog_title'])){?>
				<h2><?php echo esc_attr($jenna_redux_demo['blog_title']);?></h2>
			<?php }else{?>
				<h2><?php echo esc_html__( 'Blog', 'jenna' );?></h2>
			<?php } ?>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row pt-60">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ){?>
				<div class="col-lg-8">
			<?php }else{?>
				<div class="col-lg-12">
			<?php } ?>
					<?php
					$wp_query = new \WP_Query(array('post_type' => 'post','paged' => $paged,  'orderby' => 'ID', 'order' => 'DESC'));
					while($wp_query->have_posts()): $wp_query->the_post(); 
						$blog_content = get_post_meta(get_the_ID(),'_cmb_content_excerpt_1', true);
					?>
						<div class="single-blog-box pb-60">
							<?php if (has_post_thumbnail()) { ?>
								<div class="single-blog-img">
									<img class="lazy" src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
								</div>
							<?php } ?>
							<div class="single-blog-content">
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<ul class="metadata">
									<li class="metadata_item">
										<?php echo get_the_author_posts_link(); ?>
									</li>
									<li class="metadata_item">
										<?php the_time(get_option( 'date_format' ));?>
									</li>
									<li class="metadata_item">
										<?php comments_number( esc_html__('0 Comments', 'jenna'), esc_html__('1 Comment', 'jenna'), esc_html__('% Comments', 'jenna') ); ?>
									</li>
								</ul>
								<?php if ( '' !== wp_specialchars_decode($blog_content)): ?>
									<?php print wp_specialchars_decode($blog_content); ?>
								<?php else:?>
									<?php if(isset($jenna_redux_demo['blog_excerpt'])){?>
									<?php echo esc_attr(jenna_excerpt_1($jenna_redux_demo['blog_excerpt'])); ?>
									<?php }else{?>
									<?php echo esc_attr(jenna_excerpt_1(40)); 
									}?>
								<?php endif ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="col-md-12">
								<button class="button-1 mt-20 px-btn">
									<span>
										<?php if(isset($jenna_redux_demo['blog_btn_text'])){?>
											<?php echo esc_attr($jenna_redux_demo['blog_btn_text']);?>
										<?php }else{?>
											<?php echo esc_html__( 'Read more', 'jenna' );?>
										<?php } ?>
									</span>
								</button>
							</a>
						</div>
					<?php endwhile; ?>
					<div class="col-md-12">
						<?php jenna_pagination(); ?>
					</div>
				</div>
			<?php if ( is_active_sidebar( 'sidebar-1' ) ){?>
				<div class="col-lg-4 hv-sidebar">
					<?php get_sidebar(); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>