<?php 
	get_header(); 
	the_post();
?>
<main style="" class="wrap-1920">	
	<section class="hero clear rel light-mint-bg">
		
		<figure class="arm green-arm-flask">
			<img src="<?php bloginfo('template_directory'); ?>/assets/gfx/yellow-arm-flask.svg" alt="">
		</figure>
		
		<figure class="arm black-arm-flask">
			<img src="<?php bloginfo('template_directory'); ?>/assets/gfx/green-arm-flask.svg" alt="">
		</figure>
		<section class="cont wrap-800 p-h-2 t-c p-v-2 intro">
			<h1 class="m-b-2" style="margin-top:3rem;">
				<span class="a-1">Verdens første<br> innovasjonsfond<br></span>
				<span class="a-2">basert</span>
				<span class="a-3">på</span> 
				<span class="a-4">pant.</span>
			</h1>
			<a href="#oversikt" class="scroll-down">
				<img src="<?php bloginfo('template_directory'); ?>/assets/gfx/read-more.svg" alt="">
			</a>
		</section>
		
		<figure class="arm pink-arm-box">
			<img src="<?php bloginfo('template_directory'); ?>/assets/gfx/pink-arm-box.svg" alt="">
		</figure>
		<figure class="arm black-checkhand">
			<img src="<?php bloginfo('template_directory'); ?>/assets/gfx/black-checkhand.svg" alt="">
		</figure>
		
		
	</section>
	
	
			
		
					        
		 	<section class="light-bg editor p-v-4 p-v-2 p-h-1 partners t-c rel overflow logoes-wrap">
				<div class="wrap-1240">
					<h2>Vi henter pant gratis i hele Norge</h2>
					<p>Vi henter pant direkte fra ditt kontor eller arrangement, og støtter bærekraftig innovasjon med panteverdien.</p>				
					<ul class="row m-b-1">
						<?php if( have_rows('logoes_repeater', 156) ): while ( have_rows('logoes_repeater', 156) ) : the_row();?>
						<?php
						$name = get_sub_field('name');
						$link = get_sub_field('link');
						$logo = get_sub_field('image');
						?>
						<?php if ($link): ?>
							<li>
								<a href="<?php echo $link;?>">
									<img src="<?php echo $logo['url'];?>" alt="<?php echo $name; ?>">
								</a>
							</li>						
						<?php else: ?>
							<li>
								<img src="<?php echo $logo['url'];?>" alt="<?php echo $name; ?>">
							</li>						
						<?php endif; ?>	
						<?php endwhile; endif; ?>											
					</ul>
					<a href="/kontakt" class="">Hvorfor bli en pantehelt? ›</a>

				</div>
			</section>
		
			 

	
	
	
	<section id="oversikt" class="light-bg p-t-8-d p-t-4 p-b-6 p-v-2 p-h-1 ">
		<section class="t-c">
			<h2 class="m-b-4">Hvordan virker det?</h2>
			<section class="row m-b-2 rel doing wrap-1800 " style="overflow: hidden;">
				<div class="p-h-2">
					<figure class="m-b-2">
						<img class="figure1" src="<?php bloginfo('template_directory'); ?>/assets/gfx/bedriften-panter.svg" alt="">
					</figure>
					<div>
						<h3 class="bold m-b-1">Bedriften <br>din panter.</h3>
						<p class="m-b-2">Bruk eget utstyr eller kjøp våre estetiske beholdere</p>
					</div>
				</div>
				<div class="p-h-2 van">
					<figure class="m-b-2">
						<img class="figure2" src="<?php bloginfo('template_directory'); ?>/assets/gfx/pant-hentes.svg" alt="">
					</figure>
					<div>
						<h3 class="bold m-b-1">Panten <br>hentes.</h3>
						<p class="m-b-2">Vi henter pant gratis fra din bedrift eller ditt arrangement</p>
					</div>
				</div>
				<div class="p-h-2">
					<figure class="m-b-2">
						<img class="figure3" src="<?php bloginfo('template_directory'); ?>/assets/gfx/arm-bulb.svg" alt="">
					</figure>
					<div>
						<h3 class="bold m-b-1">Innovasjon<br> skapes.</h3>
						<p class="m-b-2">Panten doneres til norske oppstartselskaper som jobber med FNs SDGs</p>
					</div>
				</div>

			</section>
			
			<div class="wrap-600 t-c ani">
				<a class="btn cta readmore" href="<?php bloginfo('url');?>/hvordan-virker-det">Les mer ›</a>
			</div>
		</section>
	</section>
	
	<!--<section class="wrap-1000 editor p-v-4 p-v-2 p-h-1 ani">
		<?php the_content();?>
		
	</section>-->
	
	<section class="row boxes reset rel wrap-1240 front-boxes">
		<h2><?php echo get_field('comp_boxes_title')?></h2>
		<?php if( have_rows('front_boxes_repeater', 156) ): while ( have_rows('front_boxes_repeater', 156) ) : the_row();?>
				<div class="col-4 box t-c p-h-1 p-v-1">
					<div style="background-color: <?php the_sub_field('front_box_bg');?>">
						<?php if(get_sub_field('front_box_text')) { ?> 
							<p style="color: <?php the_sub_field('front_box_txt_color');?>" class="p-h-2 p-v-2"><?php the_sub_field('front_box_text')?></p>
						<?php }?>
					</div> 
				</div>
		  
			
		<?php endwhile; endif; ?>
	  </section>
	
</main>
	
	
	
	
<?php 
	get_footer();
?>