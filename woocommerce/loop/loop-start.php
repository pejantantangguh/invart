<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// to check if it's home page
$bootstrapClass='';
if(is_front_page()): 
	$bootstrapClass = 'col-xl-12 col-lg-12';
else:
	$bootstrapClass = 'products-grid col-xl-9 col-lg-8 order-lg-2';
endif;
?>

<!-- Customizing loop start to use bootstrap -->

<div class="row">
	<!-- Product grid -->
	<div class="<?php echo $bootstrapClass; ?>">
		<div class="row">