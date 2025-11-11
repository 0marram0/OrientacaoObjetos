<?php

require_once("Instrumento.php");

class Participacao extends Instrumento {

    public function getNotaFinal(){
        $notaFinal = $this->nota;
        
        if($notaFinal > 10)
            return 10;
        else
            return $notaFinal;
    }

}