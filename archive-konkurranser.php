
<?php 
	get_header();
	$type = get_post_type();
	
	
	
	
	
?>


<main style="" class="wrap-1440">
	<section class="editor wrap-1000 p-v-4-d p-v-2 p-h-1 ani">
		<?php
		// would echo post 7's content up until the <!--more--> tag
$post_7 = get_post(118); 
$title = $post_7->post_title;
$content = $post_7->post_content;
?>
		
		<h1 class="t-c"><?php echo $title;?></h1>		

<?php if ( have_posts() ) :
		
	    $query = new WP_Query( array( 'post_type' => 'konkurranser', 'orderby' => 'menu_order', 'order' => 'ASC', ) );
			while ( $query->have_posts() ) : $query->the_post();?>
			
			<article class="m-b-8-d m-t-2">
				
				<?php if ( has_post_thumbnail() ) { ?>
   	        		<figure class="m-b-1">
	        			<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
	        		</figure>
				<?php } ?>
				<div class="row">
				
					<div class="col-5">
						<h2 class="orange"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<p>
						<?php if(get_field('comp_start')) { ?> 
							<strong><span><?php the_field('comp_start')?></span></strong>
							til
						<?php } ?>
						
						<?php if(get_field('comp_end')) { ?> 
							<strong><span><?php the_field('comp_end')?></span></strong>
						<?php } ?>
						</p>
						<a href="<?php the_permalink();?>" class="readmore">Les mer om konkurransen ›</a>
					</div>
					
					<div class="col-7 rel comp-exc">
						<p class=" "><?php the_excerpt();?></p>
					</div>
				</div>
			        		
			</article>
						
			<?php endwhile; wp_reset_postdata(); ?>
	<?php else :?>
	<div class="t-c m-b-8-d">
		<h2>Ingen aktive konkurranser for tiden.</h2>
		<p>Følg med på <a href="https://www.linkedin.com/company/flaskefond/" target="_blank">LinkedIn</a> for å se når vi legger ut nye konkurranser!</p>
	</div>
	<?php endif; ?>
			

		
		
		
	<?php echo $content?>

		
		
		    <section class="row boxes reset rel">
			    
				<h2><?php echo get_field('comp_boxes_title')?></h2>
				
				<?php if( have_rows('comp_boxes_repeater', 118) ): while ( have_rows('comp_boxes_repeater', 118) ) : the_row();?>
				
					    <div class="col-4 box t-c p-h-1 p-v-1">
							<div style="background-color: <?php the_sub_field('comp_box_bg');?>">
					        	<?php if(get_sub_field('comp_box_text')) { ?> 
						        	<p style="color: <?php the_sub_field('comp_box_txt_color');?>" class="p-h-2 p-v-2"><?php the_sub_field('comp_box_text')?></p>
					        	<?php }?>
							</div> 
					    </div>
				  
				    
				<?php endwhile; endif; ?>
			  </section>
					
		
		

	</section>
	
	
	<section id="tidligere-konkurranser" class="wrap-1000 p-t-4-d p-t-2 ani">
	<h2 class="t-c m-b-4-d p-b-2">Vinnere av tidligere konkurranser</h2>
		<?php
	    $stories = new WP_Query( array( 'post_type' => 'historier', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC', ) );
			while ( $stories->have_posts() ) : $stories->the_post();?>
	
				<article class="row m-b-8-d history">
					
					<?php if ( has_post_thumbnail() ) { ?>
	   	        		<a href="<?php the_permalink();?>"
		   	        		<figure class="d-h m-b-1">
		        				<?php the_post_thumbnail();?> 
							</figure>
						</a>
					<?php } ?>

					
					<div class="col-6 p-h-1 m-b-4">
						<?php if(get_field('histories_winner')) { ?> 
							<h4 class="orange"><a href="<?php the_permalink();?>"><?php the_field('histories_winner')?></a></h4>
						<?php } ?>
						
						<?php if(get_field('histories_id')) { ?> 
							<span><?php the_field('histories_id')?></span>
						<?php } ?>
			
		        		<?php if(get_field('histories_preamble')) { ?>
			        		<p class="p-v-1"><?php the_field('histories_preamble')?></p>
			        	<?php }?>
			        	
				        <?php if( get_field('histories_readmore') ): ?>
							<a href="<?php the_permalink();?>" class="readmore">Les mer ›</a>
						<?php endif; ?>
					</div>
	        		
	        		<?php if ( has_post_thumbnail() ) { ?>
	   	        		<a href="<?php the_permalink();?>"
		   	        		<figure class="col-6 m-h">
			        			<?php the_post_thumbnail();?> 
			        		</figure>
		        		</a>
					<?php } ?>
					
					


	        	
				</article>
	
		<?php endwhile; wp_reset_postdata(); ?>
	</section>
	
	
	
</main>


<?php 
	get_footer();
?>