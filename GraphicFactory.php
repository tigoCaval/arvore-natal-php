<?php
include_once "Creator.php";
include_once "GraphicProduct.php";
include_once "IProduct.php";

/**
 * [GraphicFactory]
 */
class GraphicFactory extends Creator
{
   
   protected function factoryMethod(IProduct $product)
   {
      return $product->getProperties();   
   }

}