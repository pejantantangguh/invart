<?php
/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

// To do
// Need to move this custom function to plugins!
function inv_art_heroimage_display() {
	echo '
	<div class="container-fluid">
		<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
		<div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-normal">Punny headline</h1>
		<p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
		<a class="btn btn-outline-secondary" href="#">Coming soon</a>
		</div>
		<div class="product-device shadow-sm d-none d-md-block"></div>
		<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  	</div>
  </div>
  ';
}
add_action( 'inv_art_heroimage', 'inv_art_heroimage_display');

function about_us_banner_display() {
	echo '
	<div class="container-fluid">
	<section class="mh-full-screen dark-overlay py-7 d-flex align-items-center justify-content-center"><img src="http://localhost/invart/wp-content/uploads/2020/03/photo-1534126511673-b6899657816a.jpg" alt="" class="bg-image">
		<div class="overlay-content w-100">
		  <div class="container">
			<div class="row">
			  <div class="col-xl-6 text-white">
				<h1 class="text-uppercase text-white letter-spacing-5 mb-3"> About us</h1>
				<h6 class="display-4 font-weight-bold text-shadow mb-5">We are Sell</h6>
				<p class="text-lg">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</p>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	  </div>
	';
}

add_action('about_us_banner','about_us_banner_display');

