<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Etimue_2018
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
	<!-- Microdata Schema.org https://technicalseo.com/seo-tools/schema-markup-generator/ -->
	<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "BarOrPub",
  "name": "Etimuè",
  "image": "https://etimue-it.exactdn.com/wp-content/uploads/2018/04/cropped-logo2018-512px.png?strip=all&w=250&ssl=1",
  "@id": "",
  "url": "https://etimue.it",
  "telephone": "0958363554",
  "priceRange": "5€-15€",
  "menu": "https://etimue.it/menucibo",
  "servesCuisine": "Pub",
  "acceptsReservations": "true",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "via monsignor genuardi 28",
    "addressLocality": "Acireale",
    "postalCode": "95024",
    "addressCountry": "IT"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 37.613254,
    "longitude": 15.166891999999962
  },
  "openingHoursSpecification": [{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Sunday"
    ],
    "opens": "20:00",
    "closes": "01:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Saturday",
    "opens": "20:00",
    "closes": "02:00"
  }],
  "sameAs": [
    "http://fb.me/etimue",
    "https://twitter.com/etimue",
    "https://plus.google.com/+EtimueIt",
    "https://www.instagram.com/etimue/",
    "https://www.youtube.com/user/etimue"
  ]
}
</script>
</head>
<?php if (!is_page_template('taplist.php')){;?>
<body <?php body_class(); ?>>
<?php }else{echo '<body class="container">';};?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'etimue2018' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->
	<?php if (!is_page_template('taplist.php')){;?>
	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! etimue2018_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'etimue2018-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
		}
	?>
	<div class="site-content-contain">
		<div id="content" class="site-content">
			<?php };?>
