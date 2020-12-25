<?php
include_once "IProduct.php";

class MessageProduct implements IProduct
{
     
    /**
     * Obter propriedade
     * @return [type]
     */
    public function getProperties()
    {
        $text =  "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>";
        $text .= "<div style='text-align:center'>";
        $text .= "<h1>Feliz Natal 2020 </h1>"; 
        $text .= "</div>";
        return $text;
    }

}