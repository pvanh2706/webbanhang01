<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;

the_title( '<h1 class="product_title entry-title border">', '</h1>' );
?>
<p>Mã sản phẩm <span><?php echo get_post_meta( get_the_ID(), '_sku', true ); echo get_the_ID(); ?></span> | Tình trạng: <span><?php echo $product ? $product->get_stock_status() : ''; ?></span></p>
<?php
