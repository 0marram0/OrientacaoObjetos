<?php

require_once("model/Pedido.php");
require_once("model/Prato.php");

$pratos = array();
$pedidos = array();

$prato1 = new Prato;
$prato1->setNumero(1)->setNome("Camarão à Milanesa")->setValor(110);
array_push($pratos, $prato1);

$prato2 = new Prato;
$prato2->setNumero(2)->setNome("Pizza Margherita")->setValor(80);
array_push($pratos, $prato2);

$prato3 = new Prato;
$prato3->setNumero(3)->setNome("Macarrão à Carbonara")->setValor(60);
array_push($pratos, $prato3);

$prato4 = new Prato;
$prato4->setNumero(4)->setNome("Bife à Parmegiana")->setValor(75);
array_push($pratos, $prato4);

$prato5 = new Prato;
$prato5->setNumero(5)->setNome("Risoto ao Funghi")->setValor(70);
array_push($pratos, $prato5);

$opcao = "";

do {
    echo "\n ---------- MENU ---------- \n";
    echo "1- Cadastrar Novo Pedido \n";
    echo "2- Cancelar Pedido Ativo \n";
    echo "3- Listar Pedidos Ativos \n";
    echo "4- Total de Vendas \n";
    echo "0- Sair \n \n";

    $opcao = readline("Informe uma opção: ");

    if ($opcao == 1) {

        $indice = "";

        $pedido = new Pedido;
        echo "\n";
        $pedido->setNomeCliente(readline("Informe seu nome: "));
        $pedido->setNomeGarcom(readline("Informe o nome do garçom: "));
        echo "\n";

        foreach ($pratos as $p) {
            echo $p;
        }

        echo "\n";
        $indice = readline("Informe o índice do prato escolhido: ");

        foreach ($pratos as $p) {
            if ($p->getNumero() == $indice) {
                echo "\nVocê selecionou: " . $p->getNome() . "!";
                $pedido->setPrato($p);
            }
        }

        array_push($pedidos, $pedido);
        echo "\n";
    } else if ($opcao == 2) {
        $indice = "";

        echo "\nPedidos ativos: \n \n";

        foreach ($pedidos as $i => $r) {
            echo ($i + 1) . " - " . $r;
        }

        if (count($pedidos) > 0) {
            $indice = readline("\n Informe o índice do pedido que gostaria de remover:");
            echo "\n";

            if ($indice > 0 && $indice <= count($pedidos)) {
                array_splice($pedidos, $indice - 1, 1);
            } else {
                echo "Índice inválido! \n";
            }
        } else {
            echo "Não há pedidos ativos no momento. \n";
        }
    } else if ($opcao == 3) {
        echo "\n";

        foreach ($pedidos as $i => $r) {
            echo ($i + 1) . " - " . $r;
        }
    } else if ($opcao == 4) {
        echo "\n";
        $valorTotal = 0;

        foreach ($pedidos as $r) {
            $valorTotal += $r->getPrato()->getValor();
        }

        echo "\n O valor total em entradas é de: R$" . $valorTotal . "\n";
    } else if ($opcao == 0) {
        echo "Programa Finalizado! \n";
    } else {
        echo "Opção inválida! \n";
    }
} while ($opcao != 0);
