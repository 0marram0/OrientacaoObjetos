<?php

require_once("model/Calculadora.php");
require_once("model/Soma.php");
require_once("model/Subtracao.php");
require_once("model/Multiplicacao.php");
require_once("model/Divisao.php");
require_once("model/Resto.php");

do{ 

    echo "\n-------- CALCULADORA -------- \n";
    echo "[1] Soma \n";
    echo "[2] Substracao \n";
    echo "[3] Multiplicacao \n";
    echo "[4] Divisao \n";
    echo "[5] Resto \n";
    echo "[0] Sair \n";

    $opcao = readline("\n\nInforme um índice:");

    if ($opcao == 1){
        $soma = new Soma();
        $soma->setNumA(readline("\nInforme o primeiro número: "))->setNumB($numB = readline("\nInforme o segundo número: "));
        echo $soma->calcular();
    } else if ($opcao == 2){
        $sub = new Subtracao();
        $sub->setNumA(readline("\nInforme o primeiro número: "))->setNumB($numB = readline("\nInforme o segundo número: "));
        echo $sub->calcular();
    } else if ($opcao == 3){
        $mult = new Multiplicacao();
        $mult->setNumA(readline("\nInforme o primeiro número: "))->setNumB($numB = readline("\nInforme o segundo número: "));
        echo $mult->calcular();
    } else if ($opcao == 4){
        $divi = new Divisao();
        $divi->setNumA(readline("\nInforme o primeiro número: "))->setNumB($numB = readline("\nInforme o segundo número: "));
        echo $divi->calcular();
    } else if ($opcao == 5){
        $rest = new Resto();
        $rest->setNumA(readline("\nInforme o primeiro número: "))->setNumB($numB = readline("\nInforme o segundo número: "));
        echo $rest->calcular();
    }

} while ($opcao != 0);
