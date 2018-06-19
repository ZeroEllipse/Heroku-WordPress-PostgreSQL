
<?php
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
?>

<?php
if ( ! function_exists( 'GreenFair_setup' ) ) :

	function GreenFair_setup() {

		add_theme_support( 'title-tag' );


		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 358,230,TRUE);

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'GreenFair' ),

		) );

/**	add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		) );
*/
	}  
	endif; 
add_action( 'after_setup_theme', 'GreenFair_setup' );

function GreenFair_scripts() {

	wp_enqueue_style( 'GreenFair-style', get_stylesheet_uri() );
	wp_enqueue_style( 'GreenFair-style', get_template_directory_uri() . 'css/style.css');
    wp_enqueue_style( 'GreenFair-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'GreenFair-font-awesome', get_template_directory_uri() . '/font-awesome.min.css');
    wp_enqueue_style( 'GreenFair-carousel', get_template_directory_uri() . '/carousel.css');
    wp_enqueue_style( 'GreenFair-animate', get_template_directory_uri() . '/animate.min.css');
    wp_enqueue_style( 'GreenFair-isotope', get_template_directory_uri() . '/isotope/style.css');
    wp_enqueue_style( 'GreenFair-responsive', get_template_directory_uri() . '/responsive.css');   
 
	wp_enqueue_script( 'GreenFair-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'GreenFair-html5', 'conditional', 'lt IE 9' );
}

	wp_enqueue_script( 'GreenFair-bootstrap-js', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );

	wp_enqueue_script( 'GreenFair-jquery-min', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'GreenFair-waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'GreenFair-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'GreenFair-gmaps', get_template_directory_uri() . '/js/gmaps.min.js', array(), '3.7.3' );

	wp_enqueue_script( 'GreenFair-isotope-min', get_template_directory_uri() . '/js/isotope/min/scripts-min.js', array(), '3.7.3' );
	wp_enqueue_script( 'GreenFair-cells', get_template_directory_uri() . '/js/isotope/cells-by-row.js', array(), '3.7.3' );
	wp_enqueue_script( 'GreenFair-isotope-pkgd', get_template_directory_uri() . '/js/isotope/isotope.pkgd.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'GreenFair-packery', get_template_directory_uri() . '/js/isotope/packery-mode.pkgd.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'GreenFair-isotope-js', get_template_directory_uri() . '/js/isotope/scripts.js', array(), '3.7.3' );
     
    wp_enqueue_script( 'GreenFair-backtotop', get_template_directory_uri() . '/js/backtotop.js', array(), '3.7.3' );
	wp_enqueue_script( 'GreenFair-localScroll', get_template_directory_uri() . '/js/jquery.localScroll.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'GreenFair-scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'GreenFair-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'GreenFair-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'GreenFair-main', get_template_directory_uri() . '/js/main.js', array(), '3.7.3' );


add_action( 'wp_enqueue_scripts', 'GreenFair_scripts' );


