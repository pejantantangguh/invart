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
                <!-- <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown"><a id="homeDropdownMenuLink" href="index.html" data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link active">
                        
                        Home<i class="fa fa-angle-down"></i></a>
                        <div aria-labelledby="homeDropdownMenuLink" class="dropdown-menu"><a href="../index.html" class="dropdown-item">Fullscreen home + Lookbook</a><a href="../index2.html" class="dropdown-item">Split-screen home</a><a href="../index3.html" class="dropdown-item">Classic home</a><a href="../index4.html" class="dropdown-item">Parallax sections <span class="badge badge-info ml-1">New</span></a><a href="../index5.html" class="dropdown-item">Slider + broken grid <span class="badge badge-info ml-1">New</span>    </a></div>
                    </li> 
                </ul>             -->

                <?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarCollapse',
						'menu_class'      => 'navbar-nav mx-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
                </div>
            </div>
        </nav>
    
        <?php do_action( 'inv_art_heroimage'); ?>
	</div><!-- #wrapper-navbar end -->
