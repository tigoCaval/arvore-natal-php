<?php
include_once "Creator.php";
include_once "IProduct.php";

/**
 * [MessageFactory]
 */
class MessageFactory extends Creator
{

    protected function factoryMethod(IProduct $product)
    {
       return $product->getProperties();
    }

}