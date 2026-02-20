<?php
/**
 * Block Name: Testimonial
 *
 * This is the template that displays the testimonial block.
 */




?>

<section class="row">

	<?php
	
	// create id attribute for specific styling
	$id = 'testimonial-' . $block['id'];
	
	// create align class ("alignwide") from block setting ("wide")
	$align_class = $block['align'] ? 'align' . $block['align'] : '';
	
	?>
	
	
	<?php if( have_rows('monial_repeater') ): while ( have_rows('monial_repeater') ) : the_row();?>
	
		
		<blockquote id="<?php echo $id; ?>" class="testimonial <?php echo $align_class; ?>">
		    <img src="<?php bloginfo('template_directory'); ?>/assets/gfx/quote.svg" alt="">
		    <div>
			    <p><strong><?php the_sub_field('monial_text'); ?></strong></p>
			    <cite>
			    	<span><?php the_sub_field('monial_ref'); ?></span>
			    </cite>
		    </div>
		</blockquote>

	<?php endwhile; endif; ?>

</section>