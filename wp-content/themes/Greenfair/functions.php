
<?php
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
?>

<?php
if ( ! function_exists( 'Greenfair_setup' ) ) :

	function Greenfair_setup() {

		add_theme_support( 'title-tag' );


		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 358,230,TRUE);

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'Greenfair' ),

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
add_action( 'after_setup_theme', 'Greenfair_setup' );

function Greenfair_scripts() {

	wp_enqueue_style( 'Greenfair-style', get_stylesheet_uri() );
	wp_enqueue_style( 'Greenfair-style', get_template_directory_uri() . 'css/style.css');
    wp_enqueue_style( 'Greenfair-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'Greenfair-font-awesome', get_template_directory_uri() . '/font-awesome.min.css');
    wp_enqueue_style( 'Greenfair-carousel', get_template_directory_uri() . '/carousel.css');
    wp_enqueue_style( 'Greenfair-animate', get_template_directory_uri() . '/animate.min.css');
    wp_enqueue_style( 'Greenfair-isotope', get_template_directory_uri() . '/isotope/style.css');
    wp_enqueue_style( 'Greenfair-responsive', get_template_directory_uri() . '/responsive.css');   
 
	wp_enqueue_script( 'Greenfair-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'Greenfair-html5', 'conditional', 'lt IE 9' );
}

	wp_enqueue_script( 'Greenfair-bootstrap-js', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );

	wp_enqueue_script( 'Greenfair-jquery-min', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'Greenfair-waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'Greenfair-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'Greenfair-gmaps', get_template_directory_uri() . '/js/gmaps.min.js', array(), '3.7.3' );

	wp_enqueue_script( 'Greenfair-isotope-min', get_template_directory_uri() . '/js/isotope/min/scripts-min.js', array(), '3.7.3' );
	wp_enqueue_script( 'Greenfair-cells', get_template_directory_uri() . '/js/isotope/cells-by-row.js', array(), '3.7.3' );
	wp_enqueue_script( 'Greenfair-isotope-pkgd', get_template_directory_uri() . '/js/isotope/isotope.pkgd.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'Greenfair-packery', get_template_directory_uri() . '/js/isotope/packery-mode.pkgd.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'Greenfair-isotope-js', get_template_directory_uri() . '/js/isotope/scripts.js', array(), '3.7.3' );
     
    wp_enqueue_script( 'Greenfair-backtotop', get_template_directory_uri() . '/js/backtotop.js', array(), '3.7.3' );
	wp_enqueue_script( 'Greenfair-localScroll', get_template_directory_uri() . '/js/jquery.localScroll.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'Greenfair-scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'Greenfair-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'Greenfair-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'Greenfair-main', get_template_directory_uri() . '/js/main.js', array(), '3.7.3' );


add_action( 'wp_enqueue_scripts', 'Greenfair_scripts' );


