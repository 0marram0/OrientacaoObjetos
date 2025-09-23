<?php

require_once("Animal.php");

class Gato extends Animal {

    //Atributos

    //Metodos
    public function __toString() {
        $dados = $this-> getDados();
        $dados .= "Som  | " . $this->miar() . "\n";

        return $dados;
    }

    public function miar(){
        return "Miau Miau :P!";
    }
}