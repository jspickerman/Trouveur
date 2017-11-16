<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="http://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://www.trouveurband.com/trouveur-test/wp-content/themes/silvia-child/style.css?1324491378" type="text/css" media="screen, projection" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php hybrid_attr( 'body' ); ?>>

<div id="page" class="hfeed site">

	<div class="search-area">
		<div class="wide-container">
			<?php get_search_form(); // Loads the searchform.php template. ?>
		</div>
	</div>

	<header id="masthead" class="site-header" role="banner" <?php hybrid_attr( 'header' ); ?>>
		<div class="site-branding">
			<div class="wide-container">
				<?php silvia_site_branding(); ?>
			</div>
		</div>
                           <?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="<?php echo esc_attr( silvia_main_container() ); ?>">