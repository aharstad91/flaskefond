<?php 
	get_header(); 
	the_post();
?>


<main style="background-color: <?php the_field('background_color'); ?>; overflow: hidden; " class="wrap-1920 rel">
	<section class="editor p-v-4 ani">
		<?php the_content();?>
	</section>
</main>


<?php 
	get_footer();
?>