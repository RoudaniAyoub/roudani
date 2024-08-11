<?php 
$jenna_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
while (have_posts()): the_post();
?>
<?php if(isset($jenna_redux_demo['blog_bg_light']['url']) && $jenna_redux_demo['blog_bg_light']['url'] != ''){?>
<section class="section bg-dark bg-theme" data-img-url="<?php echo esc_url($jenna_redux_demo['blog_bg_light']['url']); ?>">
<?php }else{?>
<section class="section bg-dark bg-theme">
<?php }?>
	<div class="container">
		<div class="pt-70 section-heading text-center">
			<h2><?php the_title(); ?></h2>
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
					<div class="single-blog-box">
						<?php if (has_post_thumbnail()) { ?>
							<div class="single-blog-img">
								<img class="lazy" src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
							</div>
						<?php } ?>
						<div class="single-blog-content">
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
							<?php the_content(); ?>
						</div>
					</div>
					<div class="post_comments section">
						<div class="post_comments-wrapper">
							<?php comments_template();?>
						</div>
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
<?php endwhile; ?>
<?php get_footer(); ?>