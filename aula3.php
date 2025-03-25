<?php

//Aula sobre Funções

function media(int $numero1, $numero2 = 4, $numero3 = 12) : int { 
    //"int" (O primeiro) limita os parâmetros para serem obrigatóriamente inteiros
    //"int" (O segundo) obriga o retorno a também ser um valor inteiro
    //Caso um valor seja atribuido diretamente a um parâmetro, todos a frente tambem devem ser declarados de maneira direta
    //Corpo função
    
    $soma = $numero1 + $numero2 + $numero3;
    $media = $soma/3;
    echo $media . "\n";

    return $media;
}

//Programa Principal

$numero1 = readline("Me passe 3 números e farei a média! O primeiro: ");
$numero2 = readline("O segundo: ");
$numero3 = readline("O terceiro: ");

$media = media ($numero1, $numero2, $numero3);
//Mesmo retornando, o $media não será definido aqui. O valor será retornado para o "media" que chamou a ação.
//Portanto, temos que atribuir esse valor a uma variável, como a $media posicionada acima.

//Voce também pode imprimir direto caso queira imprimir o resultado de uma função, colocando acima um "echo" ao invés da variável



