<?php

class Product
{
    public static function getBasePrice()
    {
        return 100;
    }

    public static function getPriceWithTax()
    {
        return self::getBasePrice() * 1.1;
    }

    public static function getPriceWithDynamicTax()
    {
        return static::getBasePrice() * 1.1;
    }
}

class SpecialProduct extends Product
{
    public static function getBasePrice()
    {
        return 200;
    }
}

echo SpecialProduct::getPriceWithTax() . "\n";        // Kết quả: 110
echo SpecialProduct::getPriceWithDynamicTax() . "\n"; // Kết quả: 220
