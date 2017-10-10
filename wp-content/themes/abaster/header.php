<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blankspace
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blankspace' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="col-md-12">
			<div class="site-branding">
				<div class="">
					<?php the_custom_logo();
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
				</div>
				<!-- <div class="">
					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<label>
							<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentysixteen' ); ?></span>
							<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
						</label>
						<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span></button>
					</form>
				</div> -->
			</div><!-- .site-branding -->
			<div>
					<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blankspace' ); ?></button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
			</div>
			<!--<div class="polylang-container">
				<span class="">FRA<br /><span class="">ncais</span></span>
			</div> -->
			<div class="woocommerce-cart-container">
				<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

				    $count = WC()->cart->cart_contents_count;
				    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
				    if ( $count > 0 ) {
				        ?>
				        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
				        <?php
				    }
				        ?></a>

				<?php } ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
