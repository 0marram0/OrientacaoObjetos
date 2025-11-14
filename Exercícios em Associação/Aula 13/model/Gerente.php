<?php 
require_once("Funcionario.php");

class Gerente extends Funcionario{

    public function getCalcularSalario(){
        return 1500.00 * 4.5;
    }


    public function getCargo(){
        return "Gerente"; 
}



}



?>
