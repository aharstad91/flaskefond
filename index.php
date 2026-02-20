<?php 
	get_header(); 
	the_post();
?>


<main>
	<section class="editor wrap-1240 p-v-4 p-h-1 ani">
		<h1 class=""><?php the_title('');?></h1>
		<?php the_content();?>
	</section>
</main>


<?php 
	get_footer();
?>