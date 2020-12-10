<?php


class MetaBoxes
{


    public static function register_product_price_meta_box()
    {
        add_meta_box(
            'product_price_meta_box',  //id که مورد استفاده قرار می گیرد
            ' قیمت محصول',        //string $title عنوان یا نام مورد استفاده
            'MetaBoxes::product_price_content_handler',  //callable $callback تابعی که مورد استفاده قرار می گیرد
            'product'  //string|array|WP_Screen $screen = null آدرس صفحه هست
             //string $context = 'advanced' در صفحه مورد نظر در کدام قسمت قرار بگیرد در سمت چب و...
           //string $priority = 'default' یه صورت پیش فرض در بالا یا پایین صفحه قرار بگیرد
        );


    }

    public static function product_price_content_handler($post)
    {
        $post_price = (int)get_post_meta(
            $post->ID,
            'product_price',
            true
        );
        $post_price_sale = (int)get_post_meta(
            $post->ID,
            'product_price_sale',
            true
        );
        View::renderFile(
            'admin.product.product_price',
            array(
                'product_price' => $post_price,
                'product_price_sale' => $post_price_sale

            )
        );
    }


    public static function save_product_price($post_id)
    {
        if (isset($_POST['product_price']) && intval($_POST['product_price']) > 0) {
            update_post_meta($post_id, 'product_price', intval($_POST['product_price']));

        }
        if (isset($_POST['product_price_sale']) && intval($_POST['product_price_sale']) > 0) {
            update_post_meta($post_id, 'product_price_sale', intval($_POST['product_price_sale']));

        }
    }

}