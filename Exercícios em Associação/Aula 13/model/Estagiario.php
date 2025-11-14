<?php 
require_once("Funcionario.php");

class Estagiario extends Funcionario {

    public function getCalcularSalario(){
         return 1500.00 * 0.8;
    }

    

    public function getCargo(){
        return "Estagiário";
    }

}




?>
