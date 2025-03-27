<?php
// Lấy thông tin sản phẩm
global $product;
if ( empty( $product ) ) {
    $product = wc_get_product( get_the_ID() );
}
?>

<div class="custom-product-wrapper border">
    <h1 class="product-title"><?php the_title(); ?></h1>

    <p class="product-meta">
        Mã SP: <?php echo get_post_meta(get_the_ID(), '_sku', true); ?> | 
        Tình trạng: <?php echo ( $product->is_in_stock() ) ? '<span style="color: green;">Còn hàng</span>' : '<span style="color: red;">Hết hàng</span>'; ?>
    </p>

    <p class="product-price">
        Giá: 
        <span class="sale-price"><?php echo wc_price($product->get_sale_price()); ?></span>
        <del class="regular-price"><?php echo wc_price($product->get_regular_price()); ?></del>
        <span class="discount">-<?php echo round((($product->get_regular_price() - $product->get_sale_price()) / $product->get_regular_price()) * 100); ?>%</span>
    </p>

    <div class="quantity-box">
        <?php woocommerce_quantity_input(); ?>
    </div>

    <div class="product-buttons">
        <?php woocommerce_template_single_add_to_cart(); ?>
    </div>
</div>
