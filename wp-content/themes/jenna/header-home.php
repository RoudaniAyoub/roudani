<?php $jenna_redux_demo = get_option('redux_demo'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="author" content="pxdraft">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="Lilon- Portfolio Template">
	<meta name="description" content="Lilon- Portfolio Template">
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {?>
	<link rel="icon" href="<?php if(isset($jenna_redux_demo['favicon']['url'])){?><?php echo esc_url($jenna_redux_demo['favicon']['url']); ?><?php }?>">
	<?php }?> 
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="header-top-fixed one-page-nav main-header">
		<div class="container">
			<div class="logo">
				<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
					<?php if (isset($jenna_redux_demo['logo_light']['url']) && $jenna_redux_demo['logo_light']['url'] != '') {?>
						<img class="logo-light" src="<?php echo esc_url($jenna_redux_demo['logo_light']['url']); ?>" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php } else{ ?>
						<img class="logo-light" src="<?php echo get_template_directory_uri();?>/assets/img/logo-light.png" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php } ?>
				</a>
			</div>
			<?php 
				wp_nav_menu( 
				array( 
					'theme_location'  => 'home',
					'container'       => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'menu'            => '',
					'container_class' => '',
					'container_id'    => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
					'walker'          => new jenna_wp_bootstrap_navwalker(),
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul  class="main-menu %2$s">%3$s</ul>',
					'depth'           => 0,
				)
			); ?>
			<div class="d-flex">
				<?php 
				if(isset($jenna_redux_demo['enabled_btn']) && $jenna_redux_demo['enabled_btn'] == true){ ?>
					<?php if (('' != $jenna_redux_demo['link_btn']) && ('' != $jenna_redux_demo['text_btn'])): ?>
						<a class="px-btn d-none d-lg-inline-flex" href="<?php echo $jenna_redux_demo['link_btn']; ?>">
							<?php echo $jenna_redux_demo['text_btn']; ?>
						</a>
					<?php endif ?>
				<?php } ?>
				<button class="toggler-menu d-lg-none">
					<span></span>
				</button>
			</div>
		</div>
	</div>