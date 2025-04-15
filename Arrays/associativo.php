<?php

$persona1 = array("nome" => "Daniel",
                  "idade" => 27, 
                  "escola" => "IFPR");

$persona2 = array("nome" => "Pietro",
                  "idade" => 7, 
                  "escola" => "IFPR");

$personas = array($persona1, $persona2);

//Imprimir a matriz de pessoas

print_r($personas);

//Imprimir a idade da pessoa

echo $persona1["idade"];
echo "\n";


//Percorrer o array associativo

foreach($persona1 as $chave => $p) {
    echo $chave . "=" . $p . "\n";
}

