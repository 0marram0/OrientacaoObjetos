<?php

//Exercício 1

//$valor = readline("Informe um valor e te darei o resultado fatorial: ");
//fatorial($valor);

function fatorial($valor) {

    if ($valor == 0) {    
        echo "Não é possível executar esse cálculo com o número 0. Peça um novo número. \n";
    }

    if ($valor != 0) {

        $calc = $valor;

        do{
            
            $calc = $calc * ($valor - 1);
            $valor--;

        } while ($valor > 1);

        echo $calc . "\n" ;
    }
    
}







//Exercício 2

$raio = readline("Me dê o valor (em cm) do raio do seu círculo, e te passarei sua circunferência e sua área: ");

$circunf = circunferência($raio);
$area = area($raio);

function circunferência ($raio){

    $pi = 3.14;
    $circunf = (2 * $pi) * $raio;

    return $circunf;
}

function area ($raio){

    $pi = 3.14;
    $area = $pi * ($raio * $raio);

    return $area;
}

echo ("Com seu raio de " . $raio . " cm, o seu círculo possuí " . $circunf . " cm de circunferência, e " . $area . " cm² de área." . "\n");




