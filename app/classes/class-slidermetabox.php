<?php


class SliderMetaBox
{
    public static function register_product_slider_meta_box()
    {
        add_meta_box(
        //اول باید یک ای دی هست
            'product_slider_meta_box',
            //عنوان
            'گالری تصاویر',
            //فراخوانی یک تابع
            'SliderMetaBox::product_slider_content_handler',
            //کجا باید قابل استفاده باشد همان screen
            //در بخش پست تایپ slug را product گذاشته ایم
            'product'

        );
    }

    public static function product_slider_content_handler($post)
    {
        $slider_images = get_post_meta(
        //در دیتابیس یک ای دی می دهد
            $post->ID,
            //کلید استفاده شده در input که همان name است
            'slider_images',
            true
        );
//وظیفه پست کردن اطلاعات داخل input را بر عهده دارد
        View::renderFile('admin.product.slider', array('slider_images' => $slider_images));
    }

    public static function save_product_slider($post_is)
    {
        if (isset($_POST['sliders']) && count($_POST['sliders']) > 0) {
          update_post_meta($post_is,'slider_images',$_POST['sliders']);
        }
    }
}