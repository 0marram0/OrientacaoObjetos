<?php

require_once("model/Departamento.php");
require_once("model/Funcionario.php");

$funcionarios = array();

for($i=0; $i<5; $i++){
    
    echo "\n" . "\n" . "FUNCIONÁRIO " . $i+1 . "\n";

    $funcionario[$i] = new Funcionario;
    $funcionario[$i]->setNome(readline("Nome do funcionário: "))
                    ->setCargo(readline("Cargo do funcionário: "))
                    ->setSalario(readline("Salário do funcionário: "));

    $departamento = new Departamento;
    $departamento->setNome(readline("Departamento do funcionário: "))
                 ->setNumeroSala(readline("Numero da sala: "));

    $funcionario[$i]->setDepto($departamento);

    array_push($funcionarios, $funcionario[$i]);
}

foreach($funcionarios as $f){
    echo $f;
}