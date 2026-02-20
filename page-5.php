<?php 
	get_header(); 
	the_post();
?>


<main class="wrap-1920 rel">
	<section class="editor wrap-1000 p-v-4-d p-v-2 rel p-h-1 ani">
		<h1 class="t-c"><?php the_title('');?></h1>
		<?php the_content();?>
	</section>
</main>


<?php 
	get_footer();
?>