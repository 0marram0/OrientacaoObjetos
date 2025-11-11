<?php

require_once("model/Instrumento.php");
require_once("model/Prova.php");
require_once("model/Trabalho.php");
require_once("model/Participacao.php");

$opcao = "";
$notas = array();
$media = 0;

do {

    echo "\n-------- MENU -------- \n";
    echo "[1] Ver média final \n";
    echo "[2] Nota prova \n";
    echo "[3] Nota trabalho \n";
    echo "[4] Nota participação \n";
    echo "[0] Sair \n\n";

    $opcao = readline("\nEscolha um índice: ");
    
    if($opcao == 1) {

        for($i=0; $i<count($notas); $i++){
            $media += $notas[$i];
        }

        $media = $media/count($notas);

        echo "A média final é: " . $media;

    } else if($opcao == 2){
        
        $prova = new Prova;
        $prova->setNota(readline("\nInforme a nota da prova: "));
        $prova->getNotaFinal();
        
        echo "A nota da prova calculada foi: " . $prova->getNotaFinal();

        array_push($notas, $prova->getNotaFinal());
        
    } else if ($opcao == 3) {

        $trabalho = new Trabalho;
        $trabalho->setNota(readline("\nInforme a nota do trabalho: "));
        $trabalho->getNotaFinal();

        echo "A nota da trabalho calculada foi: " . $trabalho->getNotaFinal();

        array_push($notas, $trabalho->getNotaFinal());


    } else if ($opcao == 4) {

        $participacao = new Participacao;
        $participacao->setNota(readline("\nInforme a nota de participação: "));
        $participacao->getNotaFinal();

        echo "A nota da participação calculada foi: " . $participacao->getNotaFinal();

        array_push($notas, $participacao->getNotaFinal());
    }




} while ($opcao != 0);