<?php
/**
 * Block Name: Staff
 *
 * This is the template that displays the staff block.
 */






$staff_image = get_field('staff_img'); ?>

<div class="m-b-4 staff-wrap">
	
	<div class="row">
		<h4 class="title"><?php the_field('staff_name');?></h4>
		<figure class="col-3">
			<img src="<?php echo $staff_image['url']; ?>" alt="<?php echo $staff_image['alt']; ?>" />
		</figure>
		<p class="col-9 p-t-1"><?php the_field('staff_bio');?></p>
	</div>
</div>

