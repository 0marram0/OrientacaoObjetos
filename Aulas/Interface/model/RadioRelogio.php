<?php 

require_once("IRadio.php");
require_once("IRelogio.php");


class RadioRelogio implements IRadio, IRelogio{

    //Métodos
    public function ligar(){
        echo "\nLigado";
    }

    public function desligar(){
        echo "\nDesligado";
    }

    public function mostrarHora()
    {
        $hora = date ("H") -3;
        return date ("\n" . "$hora:i:s" . "\n");
    }

    public function getStatus(){
        return "Utilize os métodos ligar() e desligar()";
    }
}