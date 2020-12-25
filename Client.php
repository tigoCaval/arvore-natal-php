<?php
include_once "GraphicFactory.php";
include_once "GraphicProduct.php";
include_once "MessageFactory.php";
include_once "MessageProduct.php";   

class Client
{
    private $graphic;
    private $message;
      
    public function __construct()
    {
         $this->graphic = new GraphicFactory();
         $this->message = new MessageFactory();
         
         echo $this->graphic->startFactory(new GraphicProduct);  
         echo $this->message->startFactory(new MessageProduct()); 
    }

}