<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

// Số lượng thumbnails
global $product;
?>
<pre>
<?php //print_r($product); ?>
</pre>
<?php
?>
<style>
	.image-product-gallery {
		img {
			border-radius: 5px;
		}
		.thumbnail-img {
			cursor: pointer;
			border: 2px solid transparent;
			transition: border 0.3s;
		}
		.thumbnail-img.active {
			border: 2px solid #007bff;
		}
		.image-gallery-parent {
			position: relative;
			overflow: hidden;
		}
		.nav-arrow {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			background: rgba(0, 0, 0, 0.5);
			color: white;
			border: none;
			padding: 10px;
			cursor: pointer;
			transition: background 0.3s;
			opacity: 0.5;
		}
		.nav-arrow:hover {
			background: rgba(0, 0, 0, 0.8);
			opacity: 1;
		}
		.prev {
			left: 10px;
		}
		.next {
			right: 10px;
		}
		.image-gallery-child {
			display: flex;
			overflow-x: hidden;
			scroll-behavior: smooth;
			transition: transform 0.5s ease-in-out;
			
		}
		.image-gallery-child img {
			flex: 0 0 auto;
			width: 150px;
			height: 100px;
			border-radius: 5px;
			margin-right: 3px;
		}
	}
</style>
<div class="image-product-gallery">
	<div class="row">
		<div class="text-center image-gallery-parent" style="height: 300px;">
			<button class="nav-arrow prev" onclick="prevImage()">&#10094;</button>
			<img 
				id="mainImage" 
				src="<?php 
				$attachment_ids = $product->get_gallery_image_ids();
				if (count($attachment_ids) > 0) {
					echo wp_get_attachment_url( $attachment_ids[0] );
				} else {
					echo wp_get_attachment_url( $product->get_image_id() );
				}
				?>" 
				alt="<?php echo esc_attr( $product->get_name() ); ?>" 
				style="width: 100%; height: 100%; object-fit: cover;">
			<button class="nav-arrow next" onclick="nextImage()">&#10095;</button>
		</div>
	</div>
	<div class="row mt-3 ms-2 border">
		<div class="overflow-hidden">
			<div class="image-gallery-child" id="imageGallery">
				<?php
				$attachment_ids = $product->get_gallery_image_ids();
				foreach ( $attachment_ids as $attachment_id ) {
					echo '<img src="' . wp_get_attachment_url( $attachment_id ) . '" class="img-fluid thumbnail-img" onclick="changeImage(this)">';
				}
				?>
			</div>
		</div>
	</div>
</div>
<script>
	let currentIndex = 0;
	const images = document.querySelectorAll('.thumbnail-img');
	const gallery = document.getElementById('imageGallery');

	function changeImage(element) {
		document.getElementById('mainImage').src = element.src;
		images.forEach(img => img.classList.remove('active'));
		element.classList.add('active');
	}

	function nextImage() {
		if (currentIndex < images.length - 1) {
			currentIndex++;
			updateGallery();
		}
	}

	function prevImage() {
		if (currentIndex > 0) {
			currentIndex--;
			updateGallery();
		}
	}

	function updateGallery() {
		// Xoay 160px (150px width + 10px margin) về bên trái khi nhấn nút next
		// Xoay 160px (150px width + 10px margin) về bên phải khi nhấn nút prev
		// offset sẽ là -160px, -320px, -480px, ... khi nhấn nút next
		// offset sẽ là 0px, -160px, -320px, ... khi nhấn nút prev
		const offset = -currentIndex * 160;
		gallery.style.transform = `translateX(${offset}px)`;
		changeImage(images[currentIndex]);
	}
</script>
