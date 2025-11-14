<?php 
require_once("Funcionario.php");

class Desenvolvedor extends Funcionario {

    public function getCalcularSalario(){
        return 1500.00 * 2.3;
    }


    public function getCargo(){
        return "Desenvolvedor";
    }

}





?>
