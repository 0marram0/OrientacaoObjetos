<?php 
require_once("model/Funcionario.php");
require_once("model/Desenvolvedor.php");
require_once("model/Gerente.php");
require_once("model/Estagiario.php");

do{
    print "\n --------------MENU--------------- \n";
    print "[1] Estagiário \n";
    print "[2] Desenvolvedor \n";
    print "[3] Gerente \n";
    print "[0] Sair \n";

    $option = readline("Informe uma opção \n");

    if ($option == 1) {
        $estagiario = new Estagiario();
        $estagiario -> setNome(readline("Informe o nome do Estagiário: \n"));
        echo $estagiario;
    }else if($option == 2){
        $desenvolvedor = new Desenvolvedor();
        $desenvolvedor -> setNome(readline("Informe o nome do Desenvolvedor: \n"));
        echo $desenvolvedor;
    }else if($option == 3){
        $gerente = new Gerente();
        $gerente -> setNome(readline("Informe o nome do Gerente: \n"));
        echo $gerente;
    }

}while($option != 0);


