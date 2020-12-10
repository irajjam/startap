<?php


class Basket
{
    protected $items ;

    public static function add($product_id)
    {
        self::init_basket();
        $product = Product::find($product_id);

    }

    public static function init_basket()
    {
        if (!isset($_SESSION['basket'])) {
            $_SESSION['basket'] = [];
        }
    }
}