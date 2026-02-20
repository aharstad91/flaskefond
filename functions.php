<?php
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_editor_style('editor-style.css');
	add_image_size( 'ansatte-thumb', 25, 25, array( 'left', 'top' ) );

	function gutenbergtheme_editor_styles() { wp_enqueue_style( 'gutenbergthemeblocks-style', get_template_directory_uri() . '/blocks.css'); }
	
	add_action( 'enqueue_block_editor_assets', 'gutenbergtheme_editor_styles' );


	function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Hovedmeny'),
			'footer-menu' 	=> __( 'Meny i bunn'),
			'mobile-menu' 	=> __( 'Mobilmeny'),

		)
		);
	}
	add_action( 'init', 'register_theme_menus' );


/* ------------------------------------------------------------------------------------- *
 * Setup admin
 * ------------------------------------------------------------------------------------- */
	
	//Resize av bilder som har for lav størrelse
	add_filter('image_resize_dimensions', function($default, $ow, $oh, $nw, $nh, $crop){
	 if(!$crop)return $default; //let the wordpress default function handle this
	 $sx = floor(($ow - ($cw = round($nw / max($nw/$ow, $nh/$oh)))) / 2);
	 $sy = floor(($oh - ($ch = round($nh / max($nw/$ow, $nh/$oh)))) / 2);
	 return array(0, 0, (int)$sx, (int)$sy, (int)$nw, (int)$nh, (int)$cw, (int)$ch);
	}, 10, 6);

	//SVG support through media uploader
	function cc_mime_types($mimes) {$mimes['svg'] = 'image/svg+xml';return $mimes;}
	add_filter('upload_mimes', 'cc_mime_types');	



add_action('init', function(){					//Kjør stuff når WP er startet opp
	add_post_type_support('page', 'excerpt');	//Support for excerpt på pages
	$args = array(
		'public'		=> true,
		'has_archive'	=> true,
		'hierarchical'	=> true,
	    'show_in_rest' => true,
		'supports'		=> array('title', 'editor', 'thumbnail', 'revisions', 'excerpt'),
	);
	register_post_type('konkurranser', wp_parse_args('label=Konkurranser&menu_icon=dashicons-lightbulb', $args));
	register_post_type('historier', wp_parse_args('label=Historier&menu_icon=dashicons-lightbulb', $args));

});


/* ------------------------------------------------------------------------------------- *
 * Theme markup
 * ------------------------------------------------------------------------------------- */
	
	/* Fjern <p> element på bilder */
	function filter_ptags_on_images($content){
	   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	}
	
	add_filter('the_content', 'filter_ptags_on_images');
	
	
	/* Enqueue scripts and styles. */
	function wpdocs_theme_name_scripts() {

	    wp_enqueue_style( 'framework.css', get_template_directory_uri() . '/framework.css');
	    wp_enqueue_style( 'style', get_stylesheet_uri());  




		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/wp-includes/js/jquery/jquery.js', array(), '1.0.0', true );
		wp_enqueue_script( 'scrollreveal.min.js', get_template_directory_uri() . '/assets/scripts/scrollreveal.min.js', array(), '1.0.0', false);

        
		
		
		
	}
	add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

	
	
	
	
	function load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/template-parts/block/block-styles.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
	}
	add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
	
	
	
	

	
add_action( 'admin_enqueue_scripts', 'add_google_font' );function add_google_font() {
wp_enqueue_style( 'my-google-font', 'https://use.typekit.net/jwd3guw.css' );}


	function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

	
	
	
/**
 * Registers support for Gutenberg wide images in Writy.
 */
function writy_setup() {
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'writy_setup' );

add_filter( 'edit_post_link', function( $link, $post_id, $text )
{
    // Add the target attribute 
    if( false === strpos( $link, 'target=' ) )
        $link = str_replace( '<a ', '<a target="_blank" ', $link );

    return $link;
}, 10, 3 );






add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'staff',
			'title'				=> __('Staff'),
			'description'		=> __('A custom staff block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'staff' ),
		));
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'description'		=> __('A custom testimonial block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'testimonial', 'quote' ),
		));
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'explanation',
			'title'				=> __('Explanation'),
			'description'		=> __('A custom testimonial block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'testimonial', 'quote' ),
		));
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'logoes',
			'title'				=> __('Logoes'),
			'description'		=> __('A custom testimonial block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'logoes', 'quote' ),
		));		
	}
}


function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}





add_filter( 'gform_notification_2', 'add_attachment_pdf', 10, 3 ); //target form id 2, change to your form id
function add_attachment_pdf( $notification, $form, $entry ) {
    //There is no concept of user notifications anymore, so we will need to target notifications based on other criteria,
    //such as name or subject
    if( $notification['name'] == 'Til innsendere' ) {
        //get upload root for WordPress
        $upload = wp_upload_dir();
        $upload_path = $upload['basedir'];
 
        //add file, use full path , example -- $attachment = "C:\\xampp\\htdocs\\wpdev\\wp-content\\uploads\\test.txt"
        $attachment = $upload_path . 'https://flaskefond.no/wp-content/themes/flaskefond/assets/panteguide.pdf';
 
        GFCommon::log_debug( __METHOD__ . '(): file to be attached: ' . $attachment );
 
        if ( file_exists( $attachment ) ) {
            $notification['attachments']   = rgar( $notification, 'attachments', array() );
            $notification['attachments'][] = $attachment;
            GFCommon::log_debug( __METHOD__ . '(): file added to attachments list: ' . print_r( $notification['attachments'], 1 ) );
        } else {
            GFCommon::log_debug( __METHOD__ . '(): not attaching; file does not exist.' );
        }
    }
    //return altered notification object
    return $notification;
}



























