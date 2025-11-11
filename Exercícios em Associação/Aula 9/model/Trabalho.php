<?php

require_once("Instrumento.php");

class Trabalho extends Instrumento {

    public function getNotaFinal(){
        $notaFinal = $this->nota + ($this->nota*0.2); 

        if($notaFinal > 10)
            return 10;
        else
            return $notaFinal;
    }
}