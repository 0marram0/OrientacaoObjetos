<?php

$numlist = array();
$i = 0;

do {
    $num = readline("Manda 5 números piazão (um por vez): ");
    array_push($numlist, $num);
    $i++;
} while ($i < 5);

$vetor1 = fahrenheit($numlist);
$vetor2 = fatorial($numlist);
$vetor3 = calculo($numlist);

echo "Valores em Fahrenheit: ";
imprime($vetor1);
echo "Valores em Fatorial: ";
imprime($vetor2);
echo "Valores em uma Função: ";
imprime($vetor3);

function fahrenheit($numlist)
{

    //Muda o valor em Celsius para Fahrenheit
    $fah = array();

    foreach ($numlist as $n) {
        $f = ($n * 1.8) + 32;
        array_push($fah, $f);
    }

    return $fah;
}

function fatorial($numlist)
{

    //Calcula o fatorial do número
    $fat = array();

    foreach ($numlist as $n) {
        if ($n > 0) {
            for ($i = $n - 1; $i > 0; $i--) {
                $n *= $i;
            }
            array_push($fat, $n);
        }

        if ($n < 0) {
            $n = 0;
            array_push($fat, $n);
        }
    }

    return $fat;
}

function calculo($numlist)
{

    //Calcula uma função
    $fun = array();

    foreach ($numlist as $n) {
        $c = (($n * $n) + (2 * $n) + 4) / (2 * $n);
        array_push($fun, $c);
    }

    return $fun;
}

function imprime(array $vet)
{

    //Imprime os vetores
    foreach ($vet as $v) {
        echo $v . "|";
    }

    echo "\n";
}
