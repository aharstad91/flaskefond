<?php 
	get_header(); 
	the_post();
?>


<main class="wrap-1920 rel">
	<section class="editor wrap-1000 p-v-4 ani">
		<h1 class=""><?php the_title('');?></h1>
		<?php the_content();?>
	</section>
</main>


<?php 
	get_footer();
?>