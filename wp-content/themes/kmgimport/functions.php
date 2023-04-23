<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage kmgimport
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'kmgimport_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since kmgimport
	 *
	 * @return void
	 */
	function kmgimport_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kmgimport, use a find and replace
		 * to change 'kmgimport' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kmgimport', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'kmgimport' ),
				'footer'  => esc_html__( 'Secondary menu', 'kmgimport' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		$background_color = get_theme_mod( 'background_color', 'D1E4DD' );
		if ( 127 > kmgimport_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
			add_theme_support( 'dark-editor-style' );
		}

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ( $is_IE ) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'kmgimport' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'kmgimport' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'kmgimport' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'kmgimport' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'kmgimport' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'kmgimport' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'kmgimport' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'kmgimport' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'kmgimport' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'kmgimport' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'kmgimport' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'kmgimport' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'kmgimport' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'kmgimport' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'kmgimport' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'kmgimport' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'kmgimport' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'kmgimport' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'kmgimport' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'kmgimport' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'kmgimport' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'kmgimport' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'kmgimport' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'kmgimport' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'kmgimport' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'kmgimport' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'kmgimport' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'kmgimport' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'kmgimport' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'kmgimport' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'kmgimport' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'kmgimport' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', kmgimport_get_starter_content() );
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_false' );
	}
}
add_action( 'after_setup_theme', 'kmgimport_setup' );

/**
 * Register widget area.
 *
 * @since kmgimport
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function kmgimport_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'kmgimport' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kmgimport' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kmgimport_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since kmgimport
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function kmgimport_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kmgimport_content_width', 750 );
}
add_action( 'after_setup_theme', 'kmgimport_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since kmgimport
 *
 * @return void
 */
// function kmgimport_scripts() {
// 	// Note, the is_IE global variable is defined by WordPress and is used
// 	// to detect if the current browser is internet explorer.
// 	global $is_IE, $wp_scripts;
// 	if ( $is_IE ) {
// 		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
// 		wp_enqueue_style( 'kmgimport-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
// 	} else {
// 		// If not IE, use the standard stylesheet.
// 		wp_enqueue_style( 'kmgimport-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
// 	}

// 	// RTL styles.
// 	wp_style_add_data( 'kmgimport-style', 'rtl', 'replace' );

// 	// Print styles.
// 	wp_enqueue_style( 'kmgimport-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

// 	// Threaded comment reply styles.
// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}

// 	// Register the IE11 polyfill file.
// 	wp_register_script(
// 		'kmgimport-ie11-polyfills-asset',
// 		get_template_directory_uri() . '/assets/js/polyfills.js',
// 		array(),
// 		wp_get_theme()->get( 'Version' ),
// 		true
// 	);

// 	// Register the IE11 polyfill loader.
// 	wp_register_script(
// 		'kmgimport-ie11-polyfills',
// 		null,
// 		array(),
// 		wp_get_theme()->get( 'Version' ),
// 		true
// 	);
// 	wp_add_inline_script(
// 		'kmgimport-ie11-polyfills',
// 		wp_get_script_polyfill(
// 			$wp_scripts,
// 			array(
// 				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'kmgimport-ie11-polyfills-asset',
// 			)
// 		)
// 	);

// 	// Main navigation scripts.
// 	if ( has_nav_menu( 'primary' ) ) {
// 		wp_enqueue_script(
// 			'kmgimport-primary-navigation-script',
// 			get_template_directory_uri() . '/assets/js/primary-navigation.js',
// 			array( 'kmgimport-ie11-polyfills' ),
// 			wp_get_theme()->get( 'Version' ),
// 			true
// 		);
// 	}

// 	// Responsive embeds script.
// 	wp_enqueue_script(
// 		'kmgimport-responsive-embeds-script',
// 		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
// 		array( 'kmgimport-ie11-polyfills' ),
// 		wp_get_theme()->get( 'Version' ),
// 		true
// 	);
// }
//add_action( 'wp_enqueue_scripts', 'kmgimport_scripts' );

/**
 * Enqueue block editor script.
 *
 * @since kmgimport
 *
 * @return void
 */
function kmgimport_block_editor_script() {

	wp_enqueue_script( 'kmgimport-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'kmgimport_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since kmgimport
 *
 * @link https://git.io/vWdr2
 */
function kmgimport_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	} else {
		// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
		?>
		<script>
		/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
		</script>
		<?php
	}
}
add_action( 'wp_print_footer_scripts', 'kmgimport_skip_link_focus_fix' );

/**
 * Enqueue non-latin language styles.
 *
 * @since kmgimport
 *
 * @return void
 */
function kmgimport_non_latin_languages() {
	$custom_css = kmgimport_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'kmgimport-style', $custom_css );
	}
}
//add_action( 'wp_enqueue_scripts', 'kmgimport_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-kmgimport-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-kmgimport-custom-colors.php';
new kmgimport_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
//require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-kmgimport-customize.php';
new kmgimport_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-kmgimport-dark-mode.php';
new kmgimport_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since kmgimport
 *
 * @return void
 */
function kmgimport_customize_preview_init() {
	wp_enqueue_script(
		'kmgimport-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'kmgimport-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'kmgimport-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'kmgimport_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *
 * @since kmgimport
 *
 * @return void
 */
function kmgimport_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'kmgimport-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'kmgimport_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * @since kmgimport
 *
 * @return void
 */
function kmgimport_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since kmgimport
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'kmgimport_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since kmgimport
 *
 * @return void
 */
function kmgimport_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'kmgimport_add_ie_class' );

if ( ! function_exists( 'wp_get_list_item_separator' ) ) :
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator() {
		/* translators: Used between list items, there is a space after the comma. */
		return __( ', ', 'kmgimport' );
	}
endif;

/* *********** */

/* *** Enqueue custom CSS and JS *** */
/*************************************/
require get_template_directory() . '/inc/enqueue.php';


/* *** Navwalker *** */
/*********************/
require get_template_directory() . '/inc/navwalker.php';


/* *** Woocommerce Functions *** */
/*********************/
require get_template_directory() . '/inc/woocommerce-function.php';


/* *** Membership Functions *** */
/*********************/
require get_template_directory() . '/inc/membership-card.php';


/* *** Stop plugin updates *** */
/*******************************/
function remove_core_updates() {
    global $wp_version;
    return (object) array('last_checked' => time(), 'version_checked' => $wp_version,);
} 
add_filter('pre_site_transient_update_core', 'remove_core_updates');
add_filter('pre_site_transient_update_plugins', 'remove_core_updates');
add_filter('pre_site_transient_update_themes', 'remove_core_updates');


/* *** Site identity fields *** */
/********************************/
function add_custom_fields($wp_customize) {
	/* facebook url */
	$wp_customize->add_setting( 'facebook_url', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'facebook_url', array(
		'label' => 'Facebook URL',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* instagram url */
	$wp_customize->add_setting( 'instagram_url', array(
	'default' => '',
	'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'instagram_url', array(
	'label' => 'Instagram URL',
	'section' => 'title_tagline',
	'type' => 'text'
	) );

	/* twitter url */
	$wp_customize->add_setting( 'twitter_url', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'twitter_url', array(
		'label' => 'Twitter URL',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* youtube url */
	$wp_customize->add_setting( 'youtube_url', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'youtube_url', array(
		'label' => 'Youtube URL',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* Linkedin url */
	$wp_customize->add_setting( 'linkedin_url', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'linkedin_url', array(
		'label' => 'Linkedin URL',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* Primary email address */
	$wp_customize->add_setting( 'email_address', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'email_address', array(
		'label' => 'Primary Email Address',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* Secondary email address */
	$wp_customize->add_setting( 'secondary_email', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'secondary_email', array(
		'label' => 'Secondary Email Address',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* primary contact number */
	$wp_customize->add_setting( 'primary_contact_number', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'primary_contact_number', array(
		'label' => 'Contact Number',
		'section' => 'title_tagline',
		'type' => 'text'
	) );


	/* KMG Address */
	$wp_customize->add_setting( 'kmg_address', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'kmg_address', array(
		'label' => 'KMG Address',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );

	/* KMG Address Link */
	$wp_customize->add_setting( 'kmg_address_link', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'kmg_address_link', array(
		'label' => 'KMG Address Link',
		'section' => 'title_tagline',
		'type' => 'text'
	) );



	/* location iframe gmaps */
	$wp_customize->add_setting( 'google_map_iframe', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'google_map_iframe', array(
		'label' => 'Location iFrame',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );


}
add_action('customize_register', 'add_custom_fields');


/* *** Add class in each a tag in submenu items *** */
/****************************************************/
add_filter( 'nav_menu_link_attributes', 'nav_menu_link_class', 10, 2 );
function nav_menu_link_class( $atts, $item ) {
	
	// $class = 'nav-link';
 //    $atts['class'] = $class;


    if( !$item->has_children && $item->menu_item_parent > 0 ) {
        $class         = 'dropdown-item';
        $atts['class'] = $class;
    }


    return $atts;
}


// AJAX LOAD MORE

/**
 * shortcode for listing blog posts
 */
add_shortcode('ajaxloadmoreblogdemo','ajaxloadmoreblogdemo');
function ajaxloadmoreblogdemo($atts, $content = null){
 ob_start();
 $atts = shortcode_atts(
        array(
 'post_type' => 'all_testimonial',
 'initial_posts' => '4',
 'loadmore_posts' => '2',
 ), $atts, $tag
    );
 $additonalArr = array();
 $additonalArr['appendBtn'] = true;
 $additonalArr["offset"] = 0; ?>
 <div class="dcsAllPostsWrapper"> 
 <input type="hidden" name="dcsPostType" value="<?=$atts['post_type']?>">
     <input type="hidden" name="offset" value="0">
     <input type="hidden" name="dcsloadMorePosts" value="<?=$atts['loadmore_posts']?>">
     <!-- <div class="dcsDemoWrapper"> -->
 <?php dcsGetPostsFtn($atts, $additonalArr); ?>
<!--  </div> -->
 </div>
 <?php
    return ob_get_clean();
}

function dcsGetPostsFtn($atts, $additonalArr=array()){ 
   	$args = array(
	    'post_type' => $atts['post_type'],
	    'posts_per_page' => $atts['initial_posts'],
	    'offset' => $additonalArr["offset"]
	);
	$the_query = new WP_Query( $args );
	$havePosts = true;
	if ( $the_query->have_posts() ) {
	    while ( $the_query->have_posts() ) {
	        $the_query->the_post(); ?>
	       
                    <div class="testimonial-box loadMoreRepeat">
                        <div class="testimonial-content innerWrap">
                            <ul class="review">
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                            </ul>
                            <p class="paragraph"><?php echo get_the_excerpt(); ?></p>
                            <ul class="client-name">
                                <li>
                                    <h4><?php echo get_the_title(); ?></h4>
                                </li>
                                <li>
                                    <h5><?php echo get_the_date( 'jS F' ); ?></h5>
                                </li>
                            </ul>
                        </div>
                        <div class="quote">
                            <span><i class="fas fa-quote-left"></i></span>
                        </div>
                    </div>
                
	        <?php
	    }
	} else {
	   $havePosts = false; 
	}
	wp_reset_postdata();
   	if($havePosts && $additonalArr['appendBtn'] ){ ?>
	   	<div class="btnLoadmoreWrapper testimonial-btn">
	   		<a href="javascript:void(0);" class="btn btn-primary custom-button dcsLoadMorePostsbtn">Show More</a>
	  	</div>
	  	
	  	<!-- loader for ajax -->
	  	<div class="dcsLoaderImg" style="display: none;">
		    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve" style="
		    color: #ff7361;">
			    <path fill="#ff7361" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
			      <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite"></animateTransform>
			  </path>
			</svg>
		</div>

	  	<p class="noMorePostsFound" style="display: none;">No More Posts Found</p>
    <?php
	}
}

/**
 * Enqueue scripts and styles for the front end.
 */
function dcsEnqueue_scripts() {
	wp_enqueue_script( 'dcsLoadMorePostsScript', get_template_directory_uri() . '/assets/js/loadmoreposts.js', array( 'jquery' ), '20131205', true );
	wp_localize_script( 'dcsLoadMorePostsScript', 'dcs_frontend_ajax_object',
		array( 
			'ajaxurl' => admin_url( 'admin-ajax.php' )
		)
	);
}
add_action( 'wp_enqueue_scripts', 'dcsEnqueue_scripts' );

add_action("wp_ajax_dcsAjaxLoadMorePostsAjaxReq","dcsAjaxLoadMorePostsAjaxReq");
add_action("wp_ajax_nopriv_dcsAjaxLoadMorePostsAjaxReq","dcsAjaxLoadMorePostsAjaxReq");
function dcsAjaxLoadMorePostsAjaxReq(){
	extract($_POST);
	$additonalArr = array();
	$additonalArr['appendBtn'] = false;
	$additonalArr["offset"] = $offset;
	$atts["initial_posts"] = $dcsloadMorePosts;
	$atts["post_type"] = $postType;
	dcsGetPostsFtn($atts, $additonalArr);
	die();
}

/** Blog Page Pagination */

/** Pagination */

if ( ! function_exists( 'post_pagination' ) ) :
   function post_pagination() {
     global $wp_query;
     $pager = 999999999; // need an unlikely integer
 
        echo paginate_links( array(
             'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
             'format' => '?paged=%#%',
             'current' => max( 1, get_query_var('paged') ),
             'total' => $wp_query->max_num_pages
        ) );
   }
endif;


/** Blog Page Popular posts */

function pp_getPostViews($postID){
   $count_key = 'post_views_count';
   $count = get_post_meta($postID, $count_key, true);
   if($count==''){
     delete_post_meta($postID, $count_key);
     add_post_meta($postID, $count_key, '0');
     return "0 View";
   }
   return $count.' Views';
}
function pp_setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
     $count = 0;
   delete_post_meta($postID, $count_key);
   add_post_meta($postID, $count_key, '0');
  }
 else{
   $count++;
 update_post_meta($postID, $count_key, $count);
 }
}



add_action('wp_ajax_nopriv_product_quickview', 'product_quickview');
add_action('wp_ajax_product_quickview', 'product_quickview');

function product_quickview()
{
	global $woocommerce;

	$product_id = $_REQUEST['product_id'];
	$product = wc_get_product( $product_id );
	$image_id  = $product->get_image_id();
	$image_url = wp_get_attachment_image_url( $image_id, 'full' );

	$html = '';
	$html .= '<div class="row align-items-center">';
		$html .= '<div class="col-md-6">';
			$html .= '<div class="modal-body qv-modal-body">';
				$html .= '<div class="quickview-product-image">';
					$html .= '<div class="qv-product-image qv-product-image-1">';
						$html .= '<img src="'.get_the_post_thumbnail_url($product_id).'" alt="Product image">';
					$html .= '</div>';
					$gallery = $product->get_gallery_image_ids();
					if(!empty($gallery))
					{
	                    $img_atts = wp_get_attachment_image_src( $gallery[0], $default );
	                    $img_src = $img_atts[0];
						$html .= '<div class="qv-product-image qv-product-image-2">';
							$html .= '<img src="'.$img_src.'" alt="Product image">';
						$html .= '</div>';
					}
				$html .= '</div>';
			$html .= '</div>';
		$html .= '</div>';
		$html .= '<div class="col-md-6">';
			$html .= '<div class="qv-modal-right">';
				$html .= '<div class="modal-header qv-modal-close-wrap">';
					$html .= '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
				$html .= '</div>';
				$html .= '<div class="qv-modal-heading mb-md-3 mb-2">';
					$html .= '<h4>'.$product->get_name().'</h4>';
				$html .= '</div>';
				$html .= '<div class="qv-modal-price mb-md-3 mb-2">';
					if($product->is_type('simple')) {
						$html .= '<h5>'.get_woocommerce_currency_symbol().$product->get_price().'</h5>';
                	} else if($product->is_type('variable')) {
                		$html .= '<h5>'.get_woocommerce_currency_symbol().$product->get_variation_sale_price( 'min', true ).'</h5>';
                	}
				$html .= '</div>';
				$html .= '<div class="qv-modal-desc mb-md-3 mb-2">';
					$html .= '<p class="demo">';
						$html .= wp_trim_words( ($product->description), 50, ' [...]' );
					$html .= '</p>';
				$html .= '</div>';
				$html .= '<div class="qv-modal-add">';
					if($product->is_type('simple')) {
						$html .= '<a href="'.get_the_permalink($product_id).'" class="custom-button">View Details</a>';
                	} else if($product->is_type('variable')) {
                		$html .= '<a href="'.get_the_permalink($product_id).'" class="custom-button">View Available Options</a>';
                	}
					
				$html .= '</div>';
			$html .= '</div>';
		$html .= '</div>';
	$html .= '</div>';

	$result = array(
		"product_id"	=> $product_id,
		"status"		=> "success",
		"html"			=> $html
	);

	echo json_encode($result);
	exit();
}



/* Vendor Membership status on User meta */
add_action('show_user_profile', 'usermeta_vendormembership_edit_action');
add_action('edit_user_profile', 'usermeta_vendormembership_edit_action');
function usermeta_vendormembership_edit_action($user) {
  $vendor_checked = (isset($user->vendor_membership) && $user->vendor_membership) ? ' checked="checked"' : '';
?>
    <h3>Vendor Membership Fees</h3>
    <div class="vendor_membership_div">
        <input name="vendor_membership" type="checkbox" id="vendor_membership" value="1"<?php echo $vendor_checked; ?>>
        <label for="vendor_membership">Vendor Membership Fees</label>
    </div>
<?php 
}

add_action('personal_options_update', 'usermeta_vendormembership_update_action');
add_action('edit_user_profile_update', 'usermeta_vendormembership_update_action');

function usermeta_vendormembership_update_action($user_id) {
    update_user_meta($user_id, 'vendor_membership', isset($_POST['vendor_membership']));
}

function vendor_membership_fee_order_complete_after( $order_id ) {
	$vendor_membership_sku = 'vendor-membership-fees';
    $order = new WC_Order( $order_id );
    $customer_id = $order->get_user_id();
    foreach( $order->get_items() as $item ){
        $product = $item->get_product();

        if($product->get_sku() == $vendor_membership_sku)
        {
        	update_user_meta($customer_id, 'vendor_membership', 1);
        }
    }
}

add_action( 'woocommerce_order_status_completed', 'vendor_membership_fee_order_complete_after', 20, 2 );
