<?php

function exer1()
{

    $impar = array(1, 3, 5, 7, 9);
    $par = array(2, 4, 6, 8, 10);
    $primos = array(3, 5, 7, 11, 13);
    $nãoprimos = array(1, 2, 4, 6, 8);

    for ($i = 0; $i < count($impar); $i++) {
        echo $impar[$i] . " | ";
    }

    echo "\n";

    for ($i = 0; $i < count($par); $i++) {
        echo $par[$i] . " | ";
    }

    echo "\n";

    for ($i = 0; $i < count($primos); $i++) {
        echo $primos[$i] . " | ";
    }

    echo "\n";

    for ($i = 0; $i < count($nãoprimos); $i++) {
        echo $nãoprimos[$i] . " | ";
    }
}


function exer2()
{

    $pss1 = array(
        "nome" => "Manuel de Medeiros",
        "endereço" => "Rua das Acácias",
        "cidade" => "Foz do Iguaçu",
        "UF" => "PR"
    );

    $pss2 = array(
        "nome" => "Juliana de Amaral",
        "endereço" => "Rua dos Pinheiros",
        "cidade" => "Florianópolis",
        "UF" => "SC"
    );

    $pss3 = array(
        "nome" => "Rodrigo Berekas",
        "endereço" => "Rua Dom Pedro I",
        "cidade" => "Petrópolis",
        "UF" => "RJ"
    );

    $pss4 = array(
        "nome" => "Fabíola da Silva",
        "endereço" => "Rua Chile",
        "cidade" => "Guarulhos",
        "UF" => "SP"
    );

    $clientes = array($pss1, $pss2, $pss3, $pss4);

    for ($i = 0; $i < 4; $i++) {
        echo "\n";

        foreach ($clientes[$i] as $cli  => $p) {
            echo $p . "|";
        }

        echo "\n";
    }

    echo "\n";
}


function listexer1()
{

    $vetor = array();
    $i = 0;
    $soma = 0;

    do {

        $números = readline("Me de 10 números: ");
        array_push($vetor, $números);
        $i++;
    } while ($i < 10);

    for ($i = 0; $i < 10; $i++) {

        $soma += $vetor[$i];
    }

    $media = $soma / count($vetor);
    print "A média é: " . $media . "\n";
}


function listexer2()
{

    $i = 0;
    $vetor1 = array();
    $vetor2 = array();

    do {
        $num = readline("Mim de 5 palavra: ");
        array_push($vetor1, $num);
        $i++;
    } while ($i < 5);

    array_push($vetor2, $vetor1);

    for ($j = 0; $j < 5; $j++) {
        echo $vetor2[$j] . ", ";
    }
}


function listexer3()
{

    //Função para procurar um número em um array
    function existe(array $vet, int $num)
    {
        foreach ($vet as $v) {
            if ($v == $num) {
                return true;
            }
        }
    }


    //Função para imprimir o vetor
    function imprime(array $vet)
    {
        foreach ($vet as $v) {
            echo $v . "|";
        }
    }

    //PROGRAMA PRINCIPAL
    //Vetor A - Deve ser lido
    $vetA = array();
    echo "Informe os elementos de A: ";

    for ($i = 0; $i < 5; $i++) {
        $num = readline("Informe um número: ");
        array_push($vetA, $num);
    }

    //Vetor B - Deve ser lido
    $vetB = array();
    echo "\n" . "Informe os elementos de B: ";

    for ($i = 0; $i < 5; $i++) {
        $num = readline("Informe um número: ");
        array_push($vetB, $num);
    }

    //Vetor C - Intersecção
    $vetC = array();
    foreach ($vetA as $a) {
        if (existe($vetB, $a));
        array_push($vetC, $a);
    }

    echo "\n" . "Vetor C: Intersecção: " . "\n";
    imprime($vetC);

    //Vetor D - União

    $vetD = array();
    foreach ($vetA as $a) {
        array_push($vetD, $a);
    }
    foreach ($vetB as $b) {
        array_push($vetD, $b);
    }

    echo "\n" . "Vetor D: União: " . "\n";
    imprime($vetD);
}


function listexer5()
{

    //Ler dados de 4 pessoas, armazenando em uma matriz

    $pessoas = array();

    for ($i = 1; $i <= 4; $i++) {
        echo "\n---------Pessoa " . $i . "---------\n";
        $pessoa["nome"] = readline("Informe o seu nome: ");
        $pessoa["idade"] = readline("Informe sua idade: ");
        $pessoa["cidadeNatal"] = readline("Informe a cidade em que nascestes: ");
        $pessoa["profissao"] = readline("Informe sua profissão: ");

        array_push($pessoas, $pessoa);
    }
    $pessoaMaisVelha = $pessoas[0];
    foreach ($pessoas as $p) {
        if ($p["idade"] > $pessoaMaisVelha['idade'])
            $pessoaMaisVelha = $p;
    }

    echo "Dados do idoso: \n";
    echo "Nome: " . $pessoaMaisVelha["nome"] . "\n";
    echo "Idade: " . $pessoaMaisVelha["idade"] . "\n";
    echo "Cidade Natal: " . $pessoaMaisVelha["cidadeNatal"] . "\n";
    echo "Profissão: " . $pessoaMaisVelha["profissao"] . "\n";
}

listexer3();
//Corrigir  listexer2();
