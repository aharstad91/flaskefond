<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>document.createElement('main'); /* IE-Fix */</script>
	<?php get_template_part( '/assets/scripts/analytics' ); ?>
	<?php get_template_part( '/assets//favicons' ); ?>

	<script>
		ScrollReveal({ duration: 1000 })
	</script>
<style>
  @import url("https://use.typekit.net/jwd3guw.css");
</style>
	<?php wp_head(); ?>	


<style>
	html.sr .load-hidden {
		visibility: hidden;
}
</style>


</head>
<body <?php body_class(''); ?>>
	
	<header class="p-h-2 p-v-2 t-c-m wrap-1920">
		<a href="<?php bloginfo('url');?>"><figure class="">
			<img src="<?php bloginfo('template_directory'); ?>/assets/gfx/logo.svg" alt="Flaskefond logo">				
		</figure></a>
		<nav class="f-r d-nav m-h">
			<ul>
			<?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '%3$s',  'theme_location' => 'primary-menu' ) ); ?>
			</ul>
		</nav>
	</header>
	
	<header class="m-nav  d-h light-mint-bg">
		<nav class="t-c">
			<ul class="">
				<?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '%3$s',  'theme_location' => 'mobile-menu' ) ); ?>
			</ul>
		</nav>
	</header>
