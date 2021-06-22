<?php
/**
 * departmental-store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package departmental-store
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'departmental_store_setup' ) ) :

	// change class of logo + add attr on logo element by av
	add_filter( 'get_custom_logo', function( $html, $blog_id ) {
		$html = str_replace( 'class="custom-logo"', 'class="logo-img" title="'.get_bloginfo("name").'" alt="'.get_bloginfo("name").'"', $html );
		$html = str_replace( 'custom-logo-link', 'logo', $html );
		return $html;
	}, 10, 2 );
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function departmental_store_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on departmental-store, use a find and replace
		 * to change 'departmental-store' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'departmental-store', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'departmental-store' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'departmental_store_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'departmental_store_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function departmental_store_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'departmental_store_content_width', 640 );
}
add_action( 'after_setup_theme', 'departmental_store_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function departmental_store_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'departmental-store' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'departmental-store' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	// Header Menu widget
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Menu', 'departmental-store' ),
			'id'            => 'header_widget',
			'description'   => esc_html__( 'Add widgets here.', 'departmental-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sec-wrap widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer-sec-title">',
			'after_title'   => '</h4>',
			)
		);
	// Footer First box widget
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer First Box', 'departmental-store' ),
			'id'            => 'footer_first_widget',
			'description'   => esc_html__( 'Add widgets here.', 'departmental-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sec-wrap widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer-sec-title">',
			'after_title'   => '</h4>',
			)
		);
	// Footer second box widget
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Second Box', 'departmental-store' ),
			'id'            => 'footer_second_widget',
			'description'   => esc_html__( 'Add widgets here.', 'departmental-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sec-wrap widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer-sec-title">',
			'after_title'   => '</h4>',
			)
		);
	// Footer third box widget
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Third Box', 'departmental-store' ),
			'id'            => 'footer_third_widget',
			'description'   => esc_html__( 'Add widgets here.', 'departmental-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sec-wrap widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer-sec-title">',
			'after_title'   => '</h4>',
		)
	);
	// Footer forth box widget
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Forth Box', 'departmental-store' ),
			'id'            => 'footer_forth_widget',
			'description'   => esc_html__( 'Add widgets here.', 'departmental-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sec-wrap widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer-sec-title">',
			'after_title'   => '</h4>',
		)
	);
	
	// Bottom Footer box widget
	register_sidebar(
		array(
			'name'          => esc_html__( 'Copyright Section', 'departmental-store' ),
			'id'            => 'copyright_footer',
			'description'   => esc_html__( 'Add widgets here.', 'departmental-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sec-wrap widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer-sec-title">',
			'after_title'   => '</h4>',
		)
	);
	// Bottom Footer box widget
	register_sidebar(
		array(
			'name'          => esc_html__( 'Copyright Image Section', 'departmental-store' ),
			'id'            => 'payment_image',
			'description'   => esc_html__( 'Add widgets here.', 'departmental-store' ),
			'before_widget' => '<section id="%1$s" class="footer-sec-wrap widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="footer-sec-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'departmental_store_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function departmental_store_scripts() {
	wp_enqueue_style( 'departmental-store-style', get_stylesheet_uri(), array(), _S_VERSION );
   wp_enqueue_style( 'departmental-bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css',false,'1.1','all');
   wp_enqueue_style( 'departmental-font-awesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css',false,'1.1','all');
	wp_enqueue_style( 'pe-Icon', get_template_directory_uri() . '/assets/peIcon/css/pe-icon-7-stroke.css',false,'1.1','all');
   wp_enqueue_style( 'departmental-main-css', get_template_directory_uri() . '/assets/style.css',false,'1.1','all');
	

//	wp_enqueue_script( 'departmental-store-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
//	wp_enqueue_script( 'departmental-bootstrap', get_template_directory_uri() . '/assets/jquery/jquery-3.5.1.slim.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'departmental-bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'departmental-function', get_template_directory_uri() . '/assets/function.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'departmental_store_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// add_action('wp_logout','auto_redirect_after_logout');

// function auto_redirect_after_logout(){

//   wp_redirect( home_url('https://store.tmdemo.in/my-account/') );
//   exit();

// }

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


add_filter( 'woocommerce_add_to_cart_fragments', 'refresh_cart_count', 50, 1 );
function refresh_cart_count( $fragments ){
    ob_start();
    ?>
    <span class="counter" id="cart-count"><?php
    $cart_count = WC()->cart->get_cart_contents_count();
    echo sprintf ( _n( '%d', '%d', $cart_count ), $cart_count );
    ?></span>
    <?php
     $fragments['#cart-count'] = ob_get_clean();

    return $fragments;
}

