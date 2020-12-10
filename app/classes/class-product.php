<?php


class Product
{
    //این ثابت ها مقدار name در input هستند که در product_price.php وجود دارند
    const PRICE_META_KEY = 'product_price';
    const PRICE_SALE_META_KEY = 'product_price_sale';

    public static function price($product_id, $in_persian = false)
    {
        if (!$product_id) {
            return 0;
        }
        //این تابع مقداری که در داخل input قرار دارد را با
        // یک id ومقدار product_price و به صورت true به دیتا بیس ارسال کن
        //get_post_meta( int $post_id, string $key = '', bool $single = false )
        $price = get_post_meta($product_id, self::PRICE_META_KEY, true);
        if (intval($price) > 0) {
            if ($in_persian) {
                return Utility::persian_number(number_format(apply_filters('product_price', $price)));

            }
            return apply_filters('product_price', $price);
        }
        return 0;
    }

    public static function price_sale($product_id, $in_persian = false)
    {
        if (!$product_id) {
            return 0;
        }
        $price = get_post_meta($product_id, self::PRICE_SALE_META_KEY, true);
        if (intval($price) > 0) {
            if ($in_persian) {
                return Utility::persian_number(number_format(apply_filters('product_price_sale', $price)));

            }
            return apply_filters('product_price_sale', $price);
        }
        return 0;
    }


    public static function get_slider_images($product_id)
    {
        if (!$product_id) {
            return 0;
        }
        $slider_images = get_post_meta($product_id, 'slider_images', true);
        if (!empty($slider_images) && is_array($slider_images) && count($slider_images) > 0) {
            return $slider_images;
        }
        return false;

    }


    public static function find($product_id)
    {
        $product=get_post($product_id);
        return $product;
    }

}