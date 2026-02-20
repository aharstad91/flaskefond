<?php 
	get_header(); 
	the_post();
?>


<main>
	<section class="editor wrap-800 p-v-4-d p-v-2 p-h-1 ani">
		<?php the_post_thumbnail();?>
		<h1 class=""><?php the_title('');?></h1>
		<?php the_content();?>
	</section>
</main>


<?php 
	get_footer();
?>