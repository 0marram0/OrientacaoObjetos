<?php

require_once("Instrumento.php");

class Prova extends Instrumento {

    public function getNotaFinal(){
        $notaFinal = $this->nota + ($this->nota*0.3); 
        
        if($notaFinal > 10)
            return 10;
        else
            return $notaFinal;
    }
    

}