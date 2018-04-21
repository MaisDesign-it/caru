<?php
/**
 * Etimue 2018 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Etimue_2018
 * @since 1.0
 */

/**
 * Etimue 2018 only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function etimue2018_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/etimue2018
	 * If you're building a theme based on Etimue 2018, use a find and replace
	 * to change 'etimue2018' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'etimue2018' );

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

	add_image_size( 'etimue2018-featured-image', 2000, 1200, true );

	add_image_size( 'etimue2018-thumbnail-avatar', 100, 100, true );
	add_image_size( 'etimue2018-cantina-size', 64, 64, array( 'right', 'bottom' ) ); /** Hard crop right bottom **/


	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'etimue2018' ),
		'social' => __( 'Social Links Menu', 'etimue2018' ),
		'special'=> __('Special menu', 'etimue2018'),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.

		add_theme_support( 'custom-logo', array(
			'width'       => 250,
			'height'      => 250,
			'flex-width'  => true,
		) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', etimue2018_fonts_url() ) );

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets' => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),

			// Add the core-defined business info widget to the footer 1 area.
			'sidebar-2' => array(
				'text_business_info',
			),

			// Put two core-defined widgets in the footer 2 area.
			'sidebar-3' => array(
				'text_about',
				'search',
			),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts' => array(
			'home',
			'about' => array(
				'thumbnail' => '{{image-sandwich}}',
			),
			'contact' => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'blog' => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'homepage-section' => array(
				'thumbnail' => '{{image-espresso}}',
			),
		),

		// Create the custom image attachments used as post thumbnails for pages.
		'attachments' => array(
			'image-espresso' => array(
				'post_title' => _x( 'Espresso', 'Theme starter content', 'etimue2018' ),
				'file' => 'assets/images/espresso.jpg', // URL relative to the template directory.
			),
			'image-sandwich' => array(
				'post_title' => _x( 'Sandwich', 'Theme starter content', 'etimue2018' ),
				'file' => 'assets/images/sandwich.jpg',
			),
			'image-coffee' => array(
				'post_title' => _x( 'Coffee', 'Theme starter content', 'etimue2018' ),
				'file' => 'assets/images/coffee.jpg',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods' => array(
			'panel_1' => '{{homepage-section}}',
			'panel_2' => '{{about}}',
			'panel_3' => '{{blog}}',
			'panel_4' => '{{contact}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "top" location.
			'top' => array(
				'name' => __( 'Top Menu', 'etimue2018' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			// Assign a menu to the "social" location.
			'social' => array(
				'name' => __( 'Social Links Menu', 'etimue2018' ),
				'items' => array(
					'link_yelp',
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_email',
				),
			),
		),
	);

	/**
	 * Filters Etimue 2018 array of starter content.
	 *
	 * @since Etimue 2018 1.1
	 *
	 * @param array $starter_content Array of starter content.
	 */
	$starter_content = apply_filters( 'etimue2018_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );

}
add_action( 'after_setup_theme', 'etimue2018_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function etimue2018_content_width() {

	$content_width = $GLOBALS['content_width'];

	// Get layout.
	$page_layout = get_theme_mod( 'page_layout' );

	// Check if layout is one column.
	if ( 'one-column' === $page_layout ) {
		if ( etimue2018_is_frontpage() ) {
			$content_width = 644;
		} elseif ( is_page() ) {
			$content_width = 740;
		}
	}

	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 740;
	}

	/**
	 * Filter Etimue 2018 content width of the theme.
	 *
	 * @since Etimue 2018 1.0
	 *
	 * @param int $content_width Content width in pixels.
	 */
	$GLOBALS['content_width'] = apply_filters( 'etimue2018_content_width', $content_width );
}
add_action( 'template_redirect', 'etimue2018_content_width', 0 );

/**
 * Register custom fonts.
 */
function etimue2018_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'etimue2018' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Etimue 2018 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function etimue2018_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'etimue2018-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'etimue2018_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function etimue2018_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'etimue2018' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'etimue2018' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'etimue2018' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'etimue2018' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'etimue2018' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'etimue2018' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'etimue2018_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Etimue 2018 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function etimue2018_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'etimue2018' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'etimue2018_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Etimue 2018 1.0
 */
function etimue2018_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'etimue2018_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function etimue2018_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'etimue2018_pingback_header' );

/**
 * Display custom color CSS.
 */
function etimue2018_colors_css_wrap() {
	if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
		return;
	}

	require_once( get_parent_theme_file_path( '/inc/color-patterns.php' ) );
	$hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );
?>
	<style type="text/css" id="custom-theme-colors" <?php if ( is_customize_preview() ) { echo 'data-hue="' . $hue . '"'; } ?>>
		<?php echo etimue2018_custom_colors_css(); ?>
	</style>
<?php }
add_action( 'wp_head', 'etimue2018_colors_css_wrap' );

/**
 * Enqueue scripts and styles.
 */
function etimue2018_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'etimue2018-fonts', etimue2018_fonts_url(), array(), null );

	// Theme stylesheet.
	if ( is_page_template( 'et2018.php' ) ) {
		wp_enqueue_style( 'carousel-homepage', get_theme_file_uri( '/css/carousel-1.css' ) );
		wp_enqueue_style( 'grid', get_theme_file_uri( '/css/bootstrap-grid.min.css' ) );
	}elseif ( is_page_template( 'taplist.php' ) ) {
		//wp_enqueue_style( 'taplist', get_theme_file_uri( '/css/specifici/taplist.css' ) );
		wp_enqueue_style( 'not-homepage', get_theme_file_uri( '/css/mainstyle.css' ) );
	}elseif ( is_page_template( 'template-parts/page-menucibo.php' ) ) {
		wp_enqueue_style( 'carousel-homepage', get_theme_file_uri( '/css/specifici/page-menucibo-actual.css' ) );
		//wp_enqueue_style( 'not-homepage', get_theme_file_uri( '/css/mainstyle.css' ) );
		//wp_enqueue_style( 'menucibo-bt', get_theme_file_uri( '/css/bootstrap.css' ) );
		wp_enqueue_script( 'colorbox', get_theme_file_uri( '/js/jquery.colorbox-min.js' ), 'jquery', '1.0', true );
		wp_enqueue_script( 'et-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js",'jquery','1.0',true);
		wp_enqueue_script( 'et-lazy', get_theme_file_uri( '/js/lazyload.js' ), 'jquery', '1.0', true );
		wp_enqueue_script( 'et-bootstrap', "//maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js",'jquery','1.0',true);
		wp_enqueue_script( 'et-allscript', get_theme_file_uri( '/js/page-menucibo.js' ), 'jquery', '1.0', true );
	}else {
		wp_enqueue_style( 'not-homepage', get_theme_file_uri( '/css/mainstyle.css' ) );
		wp_enqueue_style( 'not-not-homepage', get_theme_file_uri( '/css/bootstrap-grid.min.css' ) );
	};

	// Load the dark colorscheme.
	if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
		wp_enqueue_style( 'etimue2018-colors-dark', get_theme_file_uri( '/assets/css/colors-dark.css' ), array( 'etimue2018-style' ), '1.0' );
	}

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'etimue2018-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'etimue2018-style' ), '1.0' );
		wp_style_add_data( 'etimue2018-ie9', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'etimue2018-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'etimue2018-style' ), '1.0' );
	wp_style_add_data( 'etimue2018-ie8', 'conditional', 'lt IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'etimue2018-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$etimue2018_l10n = array(
		'quote'          => etimue2018_get_svg( array( 'icon' => 'quote-right' ) ),
	);

	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'etimue2018-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
		$etimue2018_l10n['expand']         = __( 'Expand child menu', 'etimue2018' );
		$etimue2018_l10n['collapse']       = __( 'Collapse child menu', 'etimue2018' );
		$etimue2018_l10n['icon']           = etimue2018_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
	}

	wp_enqueue_script( 'etimue2018-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

	wp_localize_script( 'etimue2018-skip-link-focus-fix', 'etimue2018ScreenReaderText', $etimue2018_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'etimue2018_scripts' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Etimue 2018 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function etimue2018_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			 $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'etimue2018_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Etimue 2018 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function etimue2018_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'etimue2018_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Etimue 2018 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function etimue2018_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'etimue2018_post_thumbnail_sizes_attr', 10, 3 );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Etimue 2018 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function etimue2018_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'etimue2018_front_page_template' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Etimue 2018 1.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function etimue2018_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'etimue2018_widget_tag_cloud_args' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );
/**
 *  Register custom navigation walker
 */
require_once get_template_directory() . '/template-parts/nav/class-wp-bootstrap-navwalker.php';
/**
 *
 * Aggiungi Disponibilità nel Quick Edit
*/

	function etdispo_quickedit_custom_posts_columns( $posts_columns ) {
		$posts_columns['et2018-quantita_birra'] = __( 'Disponibilità', 'etdispo' );
		return $posts_columns;
	}
	add_filter( 'manage_post_posts_columns', 'etdispo_quickedit_custom_posts_columns' );

	function etdispo_quickedit_custom_column_display( $column_name, $post_id ) {
		if ( 'et2018-quantita_birra' == $column_name ) {
			$etdispo_regi = get_post_meta( $post_id, 'et2018-quantita_birra', true );

			if ( $etdispo_regi ) {
				echo esc_html( $etdispo_regi );
			} else {
				esc_html_e( 'N/A', 'etdispo' );
			}
		}
	}
	add_action( 'manage_post_posts_custom_column', 'etdispo_quickedit_custom_column_display', 10, 2 );

	function etdispo_quickedit_fields( $column_name, $post_type, $post_id ) {
		if ( 'et2018-quantita_birra' != $column_name )
			return;

		$etdispo_regi = get_post_meta( $post_id, 'et2018-quantita_birra', true );
		?>
		<fieldset class="inline-edit-col-right">
			<div class="inline-edit-col">
				<label>
					<span class="title"><?php esc_html_e( 'Disponibilità', 'etdispo' ); ?></span>
					<span class="input-text-wrap">
                    <input type="text" name="et2018-quantita_birra" class="etdispoedit" value="">
                </span>
				</label>
			</div>
		</fieldset>
		<?php
	}
	add_action( 'quick_edit_custom_box', 'etdispo_quickedit_fields', 10, 3 );
	function etdispo_quickedit_save_post( $post_id, $post ) {
		// if called by autosave, then bail here
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return;

		// if this "post" post type?
		if ( $post->post_type != 'post' )
			return;

		// does this user have permissions?
		if ( ! current_user_can( 'edit_post', $post_id ) )
			return;

		// update!
		if ( isset( $_POST['et2018-quantita_birra'] ) ) {
			update_post_meta( $post_id, 'et2018-quantita_birra', $_POST['et2018-quantita_birra'] );
		}
	}
	add_action( 'save_post', 'etdispo_quickedit_save_post', 10, 2 );

	function etdispo_quickedit_javascript() {
		$current_screen = get_current_screen();
		if ( $current_screen->id != 'edit-post' || $current_screen->post_type != 'post' )
			return;

		// Ensure jQuery library loads
		wp_enqueue_script( 'jquery' );
		?>
		<script type="text/javascript">
            jQuery( function( $ ) {
                $( '#the-list' ).on( 'click', 'a.editinline', function( e ) {
                    e.preventDefault();
                    var editDispo = $(this).data( 'edit-dispo' );
                    inlineEditPost.revert();
                    $( '.etdispoedit' ).val( editDispo ? editDispo : '' );
                });
            });
		</script>
		<?php
	}
	add_action( 'admin_print_footer_scripts-edit.php', 'etdispo_quickedit_javascript' );
	/* Qui */
	function etdispo_quickedit_set_data( $actions, $post ) {
		$found_value = get_post_meta( $post->ID, 'et2018-quantita_birra', true );

		if ( $found_value ) {
			if ( isset( $actions['inline hide-if-no-js'] ) ) {
				$new_attribute = sprintf( 'data-edit-dispo="%s"', esc_attr( $found_value ) );
				$actions['inline hide-if-no-js'] = str_replace( 'class=', "$new_attribute class=", $actions['inline hide-if-no-js'] );
			}
		}

		return $actions;
	}
	add_filter('post_row_actions', 'etdispo_quickedit_set_data', 10, 2);

	/**
	 * MetaBox personalizzati
	 */

	function et_2018_get_meta_box( $meta_boxes ) {
		$prefix = 'et2018-';

		$meta_boxes[] = array(
			'id' => 'beerdesc',
			'title' => esc_html__( 'Scheda birra', 'et-2018-template' ),
			'post_types' => array( 'post' ),
			'context' => 'form_top',
			'priority' => 'high',
			'autosave' => true,
			'fields' => array(
				array(
					'id' => $prefix . 'nome_birra',
					'type' => 'text',
					'name' => esc_html__( 'Nome Birra', 'et-2018-template' ),
					'desc' => esc_html__( 'Nome Birra', 'et-2018-template' ),
					'placeholder' => esc_html__( 'Iniziale maiuscola', 'et-2018-template' ),
				),
				array(
					'id' => $prefix . 'nome_birrificio',
					'type' => 'text',
					'name' => esc_html__( 'Birrificio', 'et-2018-template' ),
					'desc' => esc_html__( 'Nome birrificio con iniziale maiuscola', 'et-2018-template' ),
					'placeholder' => esc_html__( 'Nome Birrificio', 'et-2018-template' ),
				),
				array(
					'id' => $prefix . 'gradazione',
					'type' => 'number',
					'step' => 'any',
					'name' => esc_html__( 'Gradazione', 'et-2018-template' ),
					'desc' => esc_html__( 'Gradazione senza segni! (no % e nemmeno °)', 'et-2018-template' ),
					'placeholder' => esc_html__( 'Gradazione', 'et-2018-template' ),
				),
				array(
					'id' => $prefix . 'stile_birra',
					'type' => 'text',
					'name' => esc_html__( 'Stile', 'et-2018-template' ),
					'desc' => esc_html__( 'Stile della birra', 'et-2018-template' ),
					'placeholder' => esc_html__( 'Stile della birra', 'et-2018-template' ),
				),
				array(
					'id' => $prefix . 'gusto_prevalente',
					'name' => esc_html__( 'Gusto Prevalente', 'et-2018-template' ),
					'type' => 'radio',
					'desc' => esc_html__( 'Macro descrittore', 'et-2018-template' ),
					'placeholder' => '',
					'options' => array(
						'amaro' => 'Amaro',
						'dolce' => 'Dolce',
						'acido' => 'Acido',
						'tostato' => 'Tostato',
					),
					'inline' => true,
				),
				array(
					'id' => $prefix . 'gusto_descrittori',
					'name' => esc_html__( 'Descrittori birra', 'et-2018-template' ),
					'type' => 'checkbox_list',
					'desc' => esc_html__( 'La lista dei descrittori presa da qui: https://www.pintamedicea.com/birra/2017/la-ruota-dei-sapori-di-meilgaard/', 'et-2018-template' ),
					'options' => array(
						'fruttato' => 'Fruttato',
						'floreale' => 'Floreale',
						'luppolato' => 'Luppolato',
						'resinoso' => 'Resinoso',
						'alcolico' => 'Alcolico/Solvente',
						'malto' => 'Malto',
						'caramello' => 'Caramelllo',
						'tostato' => 'Tostato/Bruciato',
						'acido' => 'Acido',
						'dolce' => 'Dolce',
						'amaro' => 'Amaro',
						'astringente' => 'Astringente',
					),
					'class' => 'listadescrittori',
					'inline' => true,
				),
				array(
					'id' => $prefix . 'prezzo_birra',
					'type' => 'number',
					'name' => esc_html__( 'Prezzo', 'et-2018-template' ),
					'desc' => esc_html__( 'Costo al pubblico della birra senza simboli!', 'et-2018-template' ),
					'placeholder' => esc_html__( 'Costo', 'et-2018-template' ),
				),
				array(
					'id' => $prefix . 'disponibilita',
					'name' => esc_html__( 'Disponibilità', 'et-2018-template' ),
					'type' => 'checkbox',
					'desc' => esc_html__( 'Disponibile o no?', 'et-2018-template' ),
					'std' => true,
				),
				array(
					'id' => $prefix . 'formato_birra',
					'name' => esc_html__( 'Formati disponibili', 'et-2018-template' ),
					'type' => 'checkbox_list',
					'desc' => esc_html__( 'Formati disponibili', 'et-2018-template' ),
					'options' => array(
						'33cl' => '33cl',
						'375cl' => '37.5cl',
						'50cl' => '50cl',
						'75cl' => '75cl',
						'magnum' => 'Magnum',
						'fusto' => 'fusto',
					),
					'class' => 'formatidisponibili',
					'inline' => true,
				),
				array(
					'id' => $prefix . 'quantita_birra',
					'type' => 'number',
					'name' => esc_html__( 'Quantità disponibile', 'et-2018-template' ),
					'desc' => esc_html__( 'Quante ne hai?', 'et-2018-template' ),
				),
				array(
					'id' => $prefix . 'annata_birra',
					'type' => 'number',
					'name' => esc_html__( 'Annata', 'et-2018-template' ),
					'desc' => esc_html__( 'Di che anno è la birra?', 'et-2018-template' ),
					'placeholder' => esc_html__( 'Annata', 'et-2018-template' ),
					'clone' => true,
					'add_button' => esc_html__( 'Anni diversi?', 'et-2018-template' ),
				),
			),
		);

		return $meta_boxes;
	}
	add_filter( 'rwmb_meta_boxes', 'et_2018_get_meta_box' );

	/*
	 * Template per i post singoli
	 */
	/*
* Define a constant path to our single template folder
*/
	define('SINGLE_PATH', TEMPLATEPATH . '/template-parts/single');

	/**
	 * Filter the single_template with our custom function
	 */
	add_filter('single_template', 'et_bun_template');

	/**
	 * Single template function which will choose our template
	 */
	function et_bun_template($single) {
		global $wp_query, $post;

		/**
		 * Checks for single template by category
		 * Check by category slug and ID
		 */
		foreach((array)get_the_category() as $cat) :

			if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
				return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';

			elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
				return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';

		endforeach;
	}

	/*
	 * Modal iperpersonalizzato
	 */
	function my_enqueue_assets() {
		wp_localize_script( 'et-modal', 'etmodal', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' )
		));
	}