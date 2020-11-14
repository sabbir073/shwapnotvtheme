<?php
/**
 * Shwapno TV functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shwapno_TV
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'shwapno_tv_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shwapno_tv_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Shwapno TV, use a find and replace
		 * to change 'shwapno_tv' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shwapno_tv', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'shwapno_tv' ),
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
				'shwapno_tv_custom_background_args',
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
				'height'      => 150,
				'width'       => 35,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'shwapno_tv_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shwapno_tv_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shwapno_tv_content_width', 640 );
}
add_action( 'after_setup_theme', 'shwapno_tv_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shwapno_tv_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'shwapno_tv' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'shwapno_tv' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'shwapno_tv_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shwapno_tv_scripts() {
	wp_enqueue_style( 'shwapno_tv-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'shwapno_tv-style2', get_template_directory_uri().'/assets/bootstrap-4.2.1/bootstrap.min.css' );

	wp_enqueue_style( 'shwapno_tv-style3', get_template_directory_uri().'/assets/owlcarousel/owl.carousel.css' );

	wp_enqueue_style( 'shwapno_tv-style4', get_template_directory_uri().'/assets/css/font-awesome.min.css' );

	wp_enqueue_style( 'shwapno_tv-style5', get_template_directory_uri().'/assets/css/icofont.min.css' );

	wp_enqueue_style( 'shwapno_tv-style6', get_template_directory_uri().'/assets/owlcarousel/animated.css' );

	wp_enqueue_style( 'shwapno_tv-style7', get_template_directory_uri().'/assets/video/video.popup.css' );

	wp_enqueue_style( 'shwapno_tv-style8', get_template_directory_uri().'/assets/css/style.css' );

	wp_enqueue_style( 'shwapno_tv-style9', get_template_directory_uri().'/assets/css/responsive.css' );

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CPoppins:200,300,400,500,600,700,800,900', false );

	wp_enqueue_script( 'shwapno_tv-script1', get_template_directory_uri() . '/assets/vendor/modernizr-3.5.0.js', array(), null );

	wp_enqueue_script( 'shwapno_tv-script2', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), null );

	wp_enqueue_script( 'shwapno_tv-script3', get_template_directory_uri() . '/assets/js/popper.min.js', array(), null );

	wp_enqueue_script( 'shwapno_tv-script4', get_template_directory_uri() . '/assets/video/video.popup.js', array(), null );

	wp_enqueue_script( 'shwapno_tv-script5', get_template_directory_uri() . '/assets/bootstrap-4.2.1/bootstrap.min.js', array(), null );

	wp_enqueue_script( 'shwapno_tv-script6', get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.js', array(), null );

	wp_enqueue_script( 'shwapno_tv-script7', get_template_directory_uri() . '/assets/menu/menumaker.js', array(), null );

	wp_enqueue_script( 'shwapno_tv-script8', get_template_directory_uri() . '/assets/slick/swiper.min.js', array(), null );

	wp_enqueue_script( 'shwapno_tv-script9', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), null );

	wp_enqueue_script( 'shwapno_tv-script10', get_template_directory_uri() . '/assets/js/main.js', array(), null );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shwapno_tv_scripts' );

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

