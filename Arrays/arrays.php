<?php

//Arrays são varíaveis que permitem armazenar uma lista de valores - Array = Lista
//Posições do Array = Chaves

$vetor = array(5, 7, 8, 4, 1, 0, 3);


//Imprimir posição x do array
//Começa sempre no 0

echo "\n";
echo $vetor[3] . "\n";


//Adicionar um elemento na array

array_push($vetor, 20);


//Imprimir todos os elementos do array - FOR

echo "\n" . "Aqui tem todos:" . "\n";

for ($i = 0; $i<count($vetor); $i++){
    echo $vetor[$i] . "\n";
}


//Imprimir todos os elementos do array - FOREACH

echo "\n" . "Aqui tem todos:" . "\n";

foreach($vetor as $elemento){
    echo $elemento . "\n";
}


//Testar e ver o comteúdo do array todo

print_r($vetor);


//Ver propiedades do array

var_dump($vetor);


