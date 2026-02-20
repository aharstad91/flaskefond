<?php
/**
 * Block Name: Explanation
 *
 * This is the template that displays the staff block.
 */




?>

	<?php
	
	// create id attribute for specific styling
	$id = 'testimonial-' . $block['id'];
	
	// create align class ("alignwide") from block setting ("wide")
	$align_class = $block['align'] ? 'align' . $block['align'] : '';
	
	?>



<section class="partners t-c rel overflow <?php echo $align_class; ?>">
	
	

	
	<?php
if ( wp_is_mobile() ) {
	$rows = get_field('logoes_repeater'); if($rows) $i = 0; { shuffle( $rows ); foreach($rows as $row) {
		$i++; if($i==7) break; 
		$image = $row['logoes_image']; ?>
		 
		<div class="logo">
			<a href="<?php echo $row['logoes_link']; ?>">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</a>
		</div>
	<?php } }

} else {
	
	$rows = get_field('logoes_repeater'); if($rows) $i = 0; { shuffle( $rows ); foreach($rows as $row) {
		$i++; if($i==30) break; 
		$image = $row['logoes_image']; ?>
		 
		<div class="logo">
			<a href="<?php echo $row['logoes_link']; ?>">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</a>
		</div>
	<?php } }

} ?>
	
	
	
</section>

