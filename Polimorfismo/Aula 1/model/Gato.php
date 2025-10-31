<?php

require_once("Animal.php");

class Gato extends Animal{
    
    public function falar(){
        return "Meau!";
    }

    public function falarAnimal(){
        return parent::falar();
    }
}