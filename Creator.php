<?php
include_once "IProduct.php";

abstract class Creator
{
    protected abstract function factoryMethod(IProduct $product);
    
    public function startFactory($productNow)
    {
        $myProduct = $productNow;
        return $this->factoryMethod($myProduct);        
    }
}