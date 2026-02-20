<?php
/**
 * Block Name: Explanation
 *
 * This is the template that displays the staff block.
 */






$staff_image = get_field('hdf_img'); 
$staff_image_mob = get_field('hdf_img_mob'); ?>


<div class="p-v-4 services">
	<div class="row rel">
		<figure class="col-6 t-c-m m-h">
			<img src="<?php echo $staff_image['url']; ?>" alt="<?php echo $staff_image['alt']; ?>" />
		</figure>
		<figure class="col-6 t-c-m d-h">
			<img src="<?php echo $staff_image_mob['url']; ?>" alt="<?php echo $staff_image_mob['alt']; ?>" />
		</figure>

		<div class="col-6">
			<h4 class="t-c-m"><?php the_field('hfd_title');?></h4>
			<p><?php the_field('hfd_text');?></p>
		</div>
	</div>
</div>

