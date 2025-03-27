<?php
    function myshop_add_woocommerce_support() {
        add_theme_support('woocommerce');
    }
    add_action('after_setup_theme', 'myshop_add_woocommerce_support');


   // add_filter( 'woocommerce_get_price_html', 'custom_price_display', 100, 2 );

//     function custom_price_display( $price, $product ) {
//         if ( $product->is_on_sale() ) {
//             $regular_price = wc_get_price_to_display( $product, array( 'price' => $product->get_regular_price() ) );
//             $sale_price = wc_get_price_to_display( $product, array( 'price' => $product->get_sale_price() ) );
            
//             // Tính phần trăm giảm giá
//             $discount_percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );

//             $price = '<span style="color: #FF9800; font-weight: bold;">' . wc_price( $sale_price ) . '</span> ';
//             $price .= '<del style="color: #888;">' . wc_price( $regular_price ) . '</del> ';
//             $price .= '<span style="color: red; font-weight: bold;">-' . $discount_percentage . '%</span>';
//         }
//         return $price;
// }
?>