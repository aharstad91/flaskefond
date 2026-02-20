<?php 
	get_header(); 
	the_post();
?>



<main style="">
	<section class="editor wrap-800 p-v-4-d p-v-2 p-h-1 ani">
		<h1 class="">Historie: <?php the_title('');?></h1>
		<?php the_content();?>
		
		<div class="pagination t-c m-t-6-d row flex">
				<!--<div class="f-l-d m-b-1"><?php previous_post_link(); ?></div>
				<div class="f-r-d m-b-1"><?php next_post_link(); ?></div>-->
			<a href="<?php bloginfo('url'); ?>/konkurranser/#tidligere-konkurranser">Se alle våre vinnere</a>
		</div>	
		

		

	</section>
	
	
</main>



<?php 
	get_footer();
?>