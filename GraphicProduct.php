<?php
include_once "IProduct.php";

class GraphicProduct implements IProduct
{

    /**
     * Obter propriedade
     * @return string
     */
    public function getProperties()
    {
       return $this->arvore(); 
    }
    
    /**
     * Construir árvore
     * @access private
     * @return string
     */
    private function arvore()
    {
        $text =  "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>";
        $text .= "<div style='text-align:center'>";
        $text .= $this->copa(10);
        $text .= $this->caule(7);
        $text .= "</div>"; 
        return $text;
    }

    /**
     * Adicionar Gráfico/Copa da árvore
     * @param int $limit
     * @access private
     * @return string
     */
    private function copa($limit)
    { 
        $aux = 3;
        $text = "<div class='text-success'>";
        for($i = 0; $i < $limit; $i++){
            for($j = 0; $j < $aux; $j++){
               $text .= "|";
            } 
            $aux += 3;  
            $text .= "".$this->espaco(50).$this->pulaLinha(1);   
        }       
        return $text .= "</div>";   
    }

    
    /**
     * Adicionar Gráfico/Caule da árvore.
     * @param int $limit
     * @access private
     * @return string
     */
    private function caule($limit)
    {
        $text = "<div class='text-danger'>";
        for($i = 0; $i < $limit; $i++){
            for($j = 0; $j < 4; $j++)
               $text .= "|";
            $text .= $this->espaco(50).$this->pulaLinha(1);      
        }       
        return $text .= "</div>";         
    }
   
    /**
     * Atribuir espaço
     * Acrescentar quantidade de &nbsp.   
     * @param int $limit
     * @access private
     * @return string
     */
    private function espaco($limit)
    {
        $text = "";
        for($i=0; $i < $limit; $i++)
           $text .= "&nbsp";
        return $text;   
    }

    /**
     * Atribuir pular linha
     * Acrescentar quantidade de <br>. 
     * @param int $limit
     * @access private
     * @return string
     */
    private function pulaLinha($limit)
    {
        $text = "";
        for($i=0; $i < $limit; $i++)
           $text .= "<br>";
        return $text;
    } 
}