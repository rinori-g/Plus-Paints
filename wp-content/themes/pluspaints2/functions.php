<?php
/**
 * pluspaints functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pluspaints
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'pluspaints_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pluspaints_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pluspaints, use a find and replace
		 * to change 'pluspaints' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pluspaints', get_template_directory() . '/languages' );

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
				'header' => esc_html__( 'Header', 'pluspaints' ),
				'footer-1' => esc_html__( 'Footer 1', 'pluspaints' ),
				'footer-2' => esc_html__( 'Footer 2', 'pluspaints' ),
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
				'pluspaints_custom_background_args',
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
add_action( 'after_setup_theme', 'pluspaints_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pluspaints_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pluspaints_content_width', 640 );
}
add_action( 'after_setup_theme', 'pluspaints_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pluspaints_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pluspaints' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pluspaints' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pluspaints_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pluspaints_scripts() {
	wp_enqueue_style( 'pluspaints-style', get_template_directory_uri() . '/css/style.css', array(), time() );
	wp_enqueue_style( 'pluspaints-contact', get_template_directory_uri() . '/css/contact.css', array(), time() );
	wp_enqueue_style( 'pluspaints-slider2', get_template_directory_uri() . '/css/slider2.css', array(), time() );
	wp_enqueue_style( 'pluspaints-nav', get_template_directory_uri() . '/css/nav.css', array(), time() );
	wp_enqueue_style( 'pluspaints-main', get_template_directory_uri() . '/css/main.css', array(), time() );

	wp_enqueue_script( 'pluspaints-jqyuery', get_template_directory_uri() . '/js/jquery-3.4.1.js', array(), time(), true );
	wp_enqueue_script( 'pluspaints-productfilter', get_template_directory_uri() . '/js/productfilter.js', array(), time(), true );
	wp_enqueue_script( 'pluspaints-js', get_template_directory_uri() . '/js/script.js', array(), time(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pluspaints_scripts' );

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



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	
}


function fp_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = __('Produktet');
    $submenu['edit.php'][5][0] = __('Produktet');
    $submenu['edit.php'][10][0] = __('Shto Produkt');
    $submenu['edit.php'][16][0] = __('Produkt Tags');
}
function fp_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = __('Produktet');
    $labels->singular_name = __('Produkt');
    $labels->add_new = __('Shto Produkt');
    $labels->add_new_item = __('Shto Produkt');
    $labels->edit_item = __('Edito Produkt');
    $labels->new_item = __('Produktet');
    $labels->view_item = __('Shiko Produktet');
    $labels->search_items = __('Kerko Produktet');
    $labels->not_found = __('Nuk u gjeten produkte');
    $labels->not_found_in_trash = __('Nuk u gjeten produkte ne shport');
    $labels->all_items = __('Te gjitha Produktet');
    $labels->menu_name = __('Produktet');
    $labels->name_admin_bar = __('Produktet');
}

add_action( 'admin_menu', 'fp_change_post_label' );
add_action( 'init', 'fp_change_post_object' );



function aa1_get_header_menu() {
    $nav = wp_get_nav_menu_items( get_nav_menu_locations()['header'] );

    $items = [];

    foreach ( $nav as $navItem ) {

        if ( $navItem->menu_item_parent == 0 ) {
            $current = false;
            if ( $navItem->object_id == get_queried_object_id() ) {
                $current = true;

            }
            $items[] = [
                'id'     => $navItem->ID,
                'sub'    => [],
                'url'    => $navItem->url,
                'name'   => $navItem->title,
                'active' => $current,
            ];
        } else {

            $id      = array_search( $navItem->menu_item_parent, array_column( $items, 'id' ) );
            $current = false;
            if ( $navItem->object_id == get_queried_object_id() ) {
                $current                = true;
                $items[ $id ]["active"] = true;
            }
            $items[ $id ]['sub'][] = [
                'id'     => $navItem->object_id,
                'url'    => $navItem->url,
                'name'   => $navItem->title,
                'type'   => $navItem->object,
                'active' => $current
            ];
        }
    }

    return $items;
}









add_action('init', 'register_strings');
function register_strings()
{
    pll_register_string('', 'Jeni konfuz se kush do të kujdeset për punën tuaj?','pluspaints');
    pll_register_string('', 'Rreth kompanisë','pluspaints');
    pll_register_string('', 'Linqet e shpejta ','pluspaints');
    pll_register_string('', 'Linqe','pluspaints');
    pll_register_string('', 'Na ndiqni','pluspaints');
    pll_register_string('', 'Copyright © 2021 All rights Reserved by Plus Paints','pluspaints');
    pll_register_string('', 'Na kontaktoni!','pluspaints');


}