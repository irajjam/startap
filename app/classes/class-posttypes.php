<?php


class PostTypes
{
    public static function make_product_post_type()
    {

        $labels = array(
            'name' => _x('محصولات', 'textdomain'),
            'singular_name' => _x('محصول',  'textdomain'),
            'menu_name' => _x('محصولات',  'textdomain'),
            'name_admin_bar' => _x('محصول',  'textdomain'),
            'add_new' => __('افزودنی های اخیر', 'textdomain'),
            'add_new_item' => __('افزودن محصول', 'textdomain'),
            'add_new_item' => __('افزودن محصول', 'textdomain'),
            'new_item' => __(' محصول جدید', 'textdomain'),
            'edit_item' => __('ویرایش محصول', 'textdomain'),
            'view_item' => __('مشاهده محصول', 'textdomain'),
            'all_items' => __('همه محصولات', 'textdomain'),
            'search_items' => __(' جستجوی محصولات  ', 'textdomain'),
            'parent_item_colon' => __(' محصولات: اصلی', 'textdomain'),
            'not_found' => __(' محصولات پیدا نشد', 'textdomain'),
            'not_found_in_trash' => __('محصولی در زباله دان یافت نشد', 'textdomain'),
            'featured_image' => _x('محصول پوشش تصویری محصول','textdomain'),
            'set_featured_image' => _x('تنضیم تصویر محصول',  'textdomain'),
            'remove_featured_image' => _x('Remove cover image','textdomain'),
            'use_featured_image' => _x('Use as cover image', 'textdomain'),
            'archives' => _x('محصول ارشیو', 'textdomain'),
            'insert_into_item' => _x('وارد کردن محصول','textdomain'),
            'uploaded_to_this_item' => _x('آپلود محصول', 'textdomain'),
            'filter_items_list' => _x('لیست محصولات فیلتر شده', 'textdomain'),
            'items_list_navigation' => _x('محصولات ','textdomain'),
            'items_list' => _x('محصولات لیست', 'textdomain'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'product'),
            'rewrite' => array('slug' => 'product_subpage'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-products',
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        );

        register_post_type('product', $args);
    }




// این $columns در افزودن هر چیزی که به صورت html
// هست به بخش محصولات استفاده می شود که به صورت ثابت است
    public static function add_price_column($columns)
    {
      $columns['product_price']='قیمت';
      return $columns;
    }


    public static function show_price_value_column($column,$post_id)
    {
        if ($column=='product_price'){
            $product_price=get_post_meta($post_id,'product_price',true);
            //برای تیدیل کردن اعدا به صورت سه رقم جدا
            echo Utility::persian_numbers(number_format($product_price)) ;
          // echo '<button class="change_product_status" data-id="'.  $product_price.'">تغییر وضعیت</button>';
        }
    }



}
