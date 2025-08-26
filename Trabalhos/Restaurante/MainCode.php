<?php

require_once("model/Pedido.php");
require_once("model/Prato.php");

$pratos = array();
$pedidos = array();

$prato1 = new Prato;
$prato1 -> setNumero(1) -> setNome("Camarão à Milanesa") -> setValor(110);
array_push($pratos, $prato1);

$prato2 = new Prato;
$prato2 -> setNumero(2) -> setNome("Pizza Margherita") -> setValor(80);
array_push($pratos, $prato2);

$prato3 = new Prato;
$prato3 -> setNumero(3) -> setNome("Macarrão à Carbonara") -> setValor(60);
array_push($pratos, $prato3);

$prato4 = new Prato;
$prato4 -> setNumero(4) -> setNome("Bife à Parmegiana") -> setValor(75);
array_push($pratos, $prato4);

$prato5 = new Prato;
$prato5 -> setNumero(5) -> setNome("Risoto ao Funghi") -> setValor(70);
array_push($pratos, $prato5);

$opcao = "";

do {
    echo "\n ---------- MENU ---------- \n";
    echo "1- Cadastrar Novo Pedido \n";
    echo "2- Cancelar Pedido Ativo \n";
    echo "3- Listar Pedidos Ativos \n";
    echo "4- Total de Vendas \n";
    echo "0- Sair \n \n";
    
    $opcao = readline("Selecione uma opção: ");

    if($opcao == 1) {

        $indice = "";

        $pedido = new Pedido;
        echo "\n";
        $pedido -> setNomeCliente(readline("Nome: "));
        $pedido -> setNomeGarcom(readline("Nome do Garçom: "));
        echo "\n";

        foreach($pratos as $p) {
            echo $p;
        }

        echo "\n";
        $indice = readline("Selecione um prato: ");
        
        foreach ($pratos as $p) {
            if ($p->getNumero() == $indice) {
                echo "Você selecionou " . $p -> getNome();
                $pedido -> setPrato($p);
            }
        }

        array_push($pedidos, $pedido);
        echo "\n";
    }

    if($opcao == 2) {
        
    }

    if($opcao == 3) {
        foreach ($pedidos as $r) {
            echo $r;
        }
    }

    if($opcao == 4) {
        
    }

    if($opcao == 0) {
        echo "Programa Finalizado";
        echo "\n";
    }


} while ($opcao != 0);