<?php

require_once("Animal.php");

class Cachorro extends Animal {

    //Atributos

    //Metodos
    public function __toString() {
        $dados = $this-> getDados();
        $dados .= "Som  | " . $this->latir() . "\n";

        return $dados;
    }

    public function latir(){
        return "Woof Woof :)!";
    }


}