<?php 

require_once("model/Circulo.php");
require_once("model/Retangulo.php");
require_once("model/Quadrado.php");

do{ 
    echo "\n------ MENU ------\n";
    echo "[1] Circulo\n";
    echo "[2] Quadrado\n";
    echo "[3] Retangulo\n";
    echo "[0] Sair do programa\n";
    
    $opcao = readline("\n\nEscolha um índice:");

    if($opcao == 1){
        $circulo = new Circulo;
        $circulo->setRaio(readline("\nInforme o raio do seu círculo: "));
        echo $circulo->getArea();
    } else if ($opcao == 2){
        $quadrado = new Quadrado;
        $quadrado->setLado(readline("\nInforme o lado do seu quadrado: "));
        echo $quadrado->getArea();
    } else if ($opcao == 3){
        $retangulo = new Retangulo;
        $retangulo->setBase(readline("\nInforme a base do seu retângulo: ")) ->setAltura(readline("\nInforme a altura do seu retângulo: "));
        echo $retangulo->getArea();
    }


} while ($opcao != 0);