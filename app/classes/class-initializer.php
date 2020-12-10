<?php


class Initializer
{
    public static function setup()
    {


        //تصویر شاخص
        add_theme_support('post-thumbnails');
        //عنوان سایت هستش
        add_theme_support('title-tag');
        //add_theme_support( 'woocommerce' );
        add_theme_support( 'custom-logo' );

    }


    public static function start_session()
    {
        //روش استارت کردن سشن
        $session_id=session_id();
        if (empty($session_id)){
            session_start();

        }
    }
  public static function theme_prefix_setup() {

        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-width' => true,
        ) );

    }

}