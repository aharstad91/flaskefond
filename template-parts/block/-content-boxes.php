<?php
/**
 * Block Name: Boxes on compitition section
 *
 * This is the template that displays the staff block.
 */




?>
    <section class="row boxes">

<?php if( have_rows('comp_boxes_repeater') ): while ( have_rows('comp_boxes_repeater') ) : the_row();?>

	    <div class="col-4 box t-c p-h-1 p-v-1">
			<div style="background-color: <?php the_sub_field('comp_box_bg');?>">
	        	<?php if(get_sub_field('comp_box_text')) { ?> 
		        	<p style="color: <?php the_sub_field('comp_box_txt_color');?>" class="p-h-2 p-v-2"><?php the_sub_field('comp_box_text')?></p>
	        	<?php }?>
			</div> 
	    </div>
  
    
<?php endwhile; endif; ?>
  </section>