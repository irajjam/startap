<?php


class NavMenu
{


    public static function register_nav_menu()
    {
        register_nav_menus(
            array(
                'Header'=>'header',
                'Main'=>'main',
                'Footer'=>'footer'
            )
        );
    }

}