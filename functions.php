<?php
/**
 * Idioticians functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Idioticians
 */

if ( ! function_exists( 'idioticians_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function idioticians_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Idioticians, use a find and replace
	 * to change 'idioticians' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'idioticians', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'idioticians' ),
		'footer' => esc_html__( 'Footer Menu', 'idioticians' ),
	) );

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
	add_theme_support( 'custom-background', apply_filters( 'idioticians_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // idioticians_setup
add_action( 'after_setup_theme', 'idioticians_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function idioticians_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'idioticians_content_width', 640 );
}
add_action( 'after_setup_theme', 'idioticians_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function idioticians_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'idioticians' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'idioticians_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function idioticians_scripts() {
	wp_enqueue_style( 'idioticians-style', get_stylesheet_uri() );

	wp_enqueue_script( 'idioticians-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'idioticians-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'idioticians_scripts' );

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

/**
 * Replaces the excerpt "more" text by a link
 */
 /**
  * Replaces the excerpt "more" text by a link
  */
 function new_Excerpt_more($more) {
 	global $post;
 	return '... <a class="moretag" href=" ' . get_permalink($post->ID) . '"> continue reading &raquo;</a>';
 }
 add_filter('excerpt_more', 'new_excerpt_more');

 /**
  * To suppress category and tag prepends to title
 */
 add_filter('gettext', 'remove_classifier_words', 20, 3);
 function remove_classifier_words( $translated_text, $untranslated_text, $domain ) {

 	$custom_field_text = 'Tag: %s';
    if ( !is_admin() && $untranslated_text === $custom_field_text ) {
      return '%s';
    }

    $custom_field_text = 'Category: %s';
    if ( !is_admin() && $untranslated_text === $custom_field_text ) {
      return '%s';
    }

    return $translated_text;
 }
