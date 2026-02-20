<?php
	get_header();
	$type = get_post_type();
?>




		<?php while(have_posts()){the_post(); ?>

			
			<?php the_title();?>
			<a href="<? the_permalink();?>">Les mer </a>			
			
			
			<?php } ?>
<?php 

	get_footer();
?>

