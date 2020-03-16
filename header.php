<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

        <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light bg-white bg-fixed-white">
            <div class="container-fluid">
                <!-- LOGO SECTION -->
               <?php if( has_custom_logo() ) :
                    the_custom_logo();
                    else :
                        if( is_home() && is_front_page() ) : ?>
                        <p> Home page navigation </p>
                            <?php else : ?>
                        <a href ="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
                         <h1> <?php bloginfo( 'name' ); ?> </h1>
                        </a>
                            <?php endif; ?>
                        <?php endif; ?>
                <!-- END LOGO SECTION -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                                    
                </div>
            </div>
        </nav>

	</div><!-- #wrapper-navbar end -->
