	
	<footer>
		<section id="kontakt" class="wrap-1920 t-c cream-bg p-v-8 p-h-1 rel overflow-h">
			<section class="">
				<figure class="yellow-hand">
					<img src="<?php bloginfo('template_directory'); ?>/assets/gfx/yellow-hand.svg" alt="">
				</figure>
				
				<div class="wrap-600 ani">
					<h3>La oss kontakte deg</h3>
					<p>Legg igjen din epost-adresse eller telefonnummer så vi tar kontakt snarest. Du blir ikke meldt inn i Flaskefond ved å sende inn her.</p>
				</div>
				<div class="m-v-2 rel">
					<button class="open-form">Kontakt meg!</button>
					<div class="leeds-form">
						<div class="leeds-form-wrap">
							<button class="close">Lukk skjema</button>
							<?php echo do_shortcode(' [gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?>
						</div>
					</div>
				</div>
				<p></p>
				
				<figure class="twirl-green">
					<img src="<?php bloginfo('template_directory'); ?>/assets/gfx/swirl-green.svg" alt="">
				</figure>
			</section>	
		</section>
		
		<section class="dark-bg z-index-10 rel">
			<section class="row wrap-1920 p-h-4-d p-h-1 p-v-2 p-t-4-d ani">
				<div class="col-5 row">
						<div class="col-5 p-r-1-d m-b-1">
							<h3 class="red">Psst!</h3>
							<p>Følg oss på sosiale medier for å få oppdateringer</p>
						</div>
						<div class="p-l-2-d col-7 m-b-2">
							<a href="https://www.linkedin.com/company/flaskefond/" target="_blank">
								<img class="" src="<?php bloginfo('template_directory'); ?>/assets/gfx/linkedIn.svg" alt="LinkedIn">
							</a>
						</div>
				</div>
				<div class="col-4 m-b-2">
					<nav>
						<ul>
							<?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '%3$s',  'theme_location' => 'footer-menu' ) ); ?>
						</ul>
					</nav>
				</div>
				<div class="col-3 t-r-d last m-b-2">
					<img src="<?php bloginfo('template_directory'); ?>/assets/gfx/logo-light.svg" alt="Flaskefond logo">
					<a href="<?php the_permalink('url');?>/personvernerklaering/">Info om informasjonskapsler ›</a>
				</div>
	
			</section>
		</section>
	</footer>
	
	
	<?php wp_footer(); ?>
	
	
			
	<script>
		ScrollReveal().reveal('.a-1', { delay: 200 })
		ScrollReveal().reveal('.a-2', { delay: 1000 })
		ScrollReveal().reveal('.a-3', { delay: 1400 })
		ScrollReveal().reveal('.a-4', { delay: 1900 })

		ScrollReveal().reveal('.scroll-down', { delay: 3000, distance: '25px' })
		
		ScrollReveal({ duration: 500,  easing: 'ease-in', distance: '3px', })
		ScrollReveal().reveal('.ani *')
		ScrollReveal().clean('.wp-block-embed, .wp-block-embed *, .gform_wrapper, .gform_fields li')

	</script>
	
	<script>
		
		jQuery(document).ready(function($){
	
		$('.open-form').click(function(e){
		    $(".leeds-form").addClass("form-active");
		    
		});
		$('.close').click(function(e){
		    $(".leeds-form").removeClass("form-active");
		    
		});

	
	});
		
</script>
</body>
</html>