<?php

/**
 * Plugin Name: YITH Product Brand Description Below Products
 * Description: A plugin that displays the brand description below the brand products in WordPress taxonomy.
 * Author: ایده پردازان مادیتا
 * Version: 1.0
 * Author URI: https://madata.ir/
 * Plugin URI: https://madata.ir/
 * Author URI: https://madata.ir/
 * Text Domain: https://madata.ir/ypbdbp
 */

add_action('woocommerce_after_shop_loop', 'yith_product_brand_description');

function yith_product_brand_description()
{
    if (is_tax('yith_product_brand')) {
        $term = get_queried_object();
?>
        <style>
            .term-description {
                display: none;
            }
        </style>
<?php
        echo '<div class="brand-description">' . term_description($term->term_id, 'yith_product_brand') . '</div>';
    }
}
