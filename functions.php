<?php

/**
* WPDocs functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WPDocs
 */

if ( ! function_exists( 'wpdocs_setup' ) ) :

/**
* Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wpdocs_setup() {

	/*
	* Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WPDocs, use a find and replace
	 * to change 'wpdocs' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wpdocs', get_template_directory() . '/languages' );
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
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wpdocs_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'wpdocs_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
	*
	* Priority 0 to make it available to lower priority callbacks.
	*
	* @global int $content_width
	*/
function wpdocs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wpdocs_content_width', 640 );
}
add_action( 'after_setup_theme', 'wpdocs_content_width', 0 );

/**
* Enqueue scripts and styles.
	*/
function wpdocs_scripts() {
	wp_enqueue_style( 'wpdocs-style', get_stylesheet_uri() );

	wp_enqueue_style( 'wpdocs-style-theme-base', get_template_directory_uri() . '/assets/css/theme.min.css' );

	wp_enqueue_style( 'wpdocs-style-theme-blue', get_template_directory_uri() . '/assets/css/theme-blue.min.css' );

	wp_enqueue_style( 'wpdocs-style-theme-custom', get_template_directory_uri() . '/assets/css/theme-custom.css' );

	wp_enqueue_style( 'wpdocs-style-highlight', get_template_directory_uri() . '/assets/css/prism.css' );

	wp_enqueue_script( 'wpdocs-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wpdocs-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script("jquery");
	wp_enqueue_script( 'wpdocs-highlight', get_template_directory_uri() . '/assets/js/prism.js' );
	wp_enqueue_script( 'wpdocs-scripts', get_template_directory_uri() . '/assets/js/scripts.js' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts' );


/**
* Implement the Custom Header feature.
	*/
require get_template_directory() . '/inc/custom-header.php';


/**
* Custom template tags for this theme.
	*/
require get_template_directory() . '/inc/template-tags.php';


/**
* Custom functions that act independently of the theme templates.
	*/
require get_template_directory() . '/inc/extras.php';


/**
* Customizer additions.
	*/
require get_template_directory() . '/inc/customizer.php';


/**
* Load Jetpack compatibility file.
	*/
require get_template_directory() . '/inc/jetpack.php';

function register_menus() {
	register_nav_menus(
		array(
			'frontpage_footer_menu' => __( 'Homepage menu' ),
			'sidemenu_documentation' => __( 'Sidebar menu' )
		)
	);
}
add_action( 'init', 'register_menus' );

function default_page_template( $template ) {

    if ( is_singular( 'page' )  ) {
        $default_template = locate_template( array( 'page-docs.php' ) );
        if ( '' != $default_template ) {
            return $default_template ;
        }
    }

    return $template;
}

add_filter( 'template_include', 'default_page_template', 99 );
