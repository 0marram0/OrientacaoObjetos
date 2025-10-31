<?php

require_once("model/Pessoa.php");
require_once("model/PessoaFisica.php");
require_once("model/PessoaJuridica.php");


$pessoas = array();

do{
    echo "\n ============ MENU ============ \n";
    echo "1- Cadastrar Pesssoa Física \n";
    echo "2- Cadastrar Pesssoa Jurídica \n";
    echo "3- Listar \n";
    echo "4- Excluir \n";
    echo "0- Sair \n";
    echo "============================== \n \n";

    $opcao = readline("Escolha um índice: ");
    echo "\n";

    if($opcao == 1){
        
        $pessoaF = new PessoaFisica;
        $pessoaF -> setNome(readline("Informe o nome: "));
        $pessoaF -> setIdade(readline("Informe o idade: "));
        $pessoaF -> setCpf(readline("Informe o CPF: "));

        array_push($pessoas, $pessoaF);
    }

    if($opcao == 2){

        $pessoaJ = new PessoaJuridica;
        $pessoaJ -> setNome(readline("Informe o nome: "));
        $pessoaJ -> setNomeFantasia(readline("Informe o nome fantasia: "));
        $pessoaJ -> setCnpj(readline("Informe o cnpj: "));

        array_push($pessoas, $pessoaJ);
    }   

    if($opcao == 3){

        echo "\nPessoas Físicas: \n \n";
        foreach ($pessoas as $p){
            if($p instanceof PessoaFisica){
                echo $p . "\n";
            }
        }
            
        echo "\nPessoas Jurídica: \n \n";
        foreach ($pessoas as $p){ 
            if ($p instanceof PessoaJuridica){
                echo $p . "\n";
            } 
        }
    }

    if($opcao == 4) {

        echo "\nPessoas Físicas: \n \n";
        foreach ($pessoas as $p){
            if($p instanceof PessoaFisica){
                echo $p . "\n";
            }
        }
            
        echo "\nPessoas Jurídica: \n \n";
        foreach ($pessoas as $p){ 
            if ($p instanceof PessoaJuridica){
                echo $p . "\n";
            } 
        }

        $indice = readline("\nInforme a posição que deseja excluir: ");

            if ($indice > 0 and $indice <= count($pessoas)){
                array_splice($pessoas, $indice -1, 1);
            } else {
                print "Índice inválido";
            }
    
    }

    if($opcao == 0){
        
        echo "Programa finalizado!";  

    }

} while ($opcao != 0);