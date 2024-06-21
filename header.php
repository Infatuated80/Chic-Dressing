<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Le site Chic Dressing a été créé par Sarah. Pour les passionnés de mode. Vous trouverez nos plus belles collections ainsi que des articles sur la mode toutes saisons. Dans notre boutique en ligne, vous trouverez nos plus belles pièces de créateurs illustres. L'achat-vente à prix cassé de marques de luxe pour votre plus grand plaisir !">
	
	<meta name="keywords" content="pièces de créateur, achat-vente, prix cassés, marques de luxe, chic dressing, mode, collection, automne, hiver, printemps, été, création, cosmétique, pantalon, jupe, robe, manteau, petits prix">
	
	<meta name="author" content="Sarah">
	
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<meta name="title" content="Bienvenue sur Chic Dressing - La mode avant tout !">
	<title>Bienvenue sur Chic Dressing - La mode avant tout !</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	} else {
		do_action('wp_body_open');
	}
	?>

	<!-- Preloader -->
	<?php get_template_part('templates/header/preloader'); ?>

	<!-- Page Wrapper -->
	<div id="page-wrap">

		<!-- Boxed Wrapper -->
		<div id="page-header" <?php echo esc_attr(ashe_options('general_header_width')) === 'boxed' ? 'class="boxed-wrapper"' : ''; ?>>

			<?php

			// Top Bar
			get_template_part('templates/header/top', 'bar');

			// Page Header
			get_template_part('templates/header/page', 'header');

			// Main Navigation
			get_template_part('templates/header/main', 'navigation');

			?>

		</div><!-- .boxed-wrapper -->

		<!-- Page Content -->
		<div class="page-content">

			<?php // Featured Slider and Links
			$post_meta = get_post_meta(get_the_ID());

			if (is_front_page() && (isset($post_meta['_wp_page_template']) && 'elementor_header_footer' === $post_meta['_wp_page_template'][0])) {

				// Featured Slider, Carousel
				if (ashe_options('featured_slider_label') === true && ashe_options('featured_slider_location') !== 'blog') {
					if (ashe_options('featured_slider_source') === 'posts') {
						get_template_part('templates/header/featured', 'slider');
					} else {
						get_template_part('templates/header/featured', 'slider-custom');
					}
				}

				// Featured Links, Banners
				if (ashe_options('featured_links_label') === true && ashe_options('featured_links_location') !== 'blog') {
					get_template_part('templates/header/featured', 'links');
				}
			}

			?>

			<?php get_template_part('templates/sidebars/sidebar', 'alt'); // Sidebar Alt 
			?>