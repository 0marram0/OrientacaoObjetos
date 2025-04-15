<?php

//Listas

$v1 = array(1, 2, 3);
$v2 = array(3, 6, 9);
$v3 = array(6, 12, 18);


//Matriz, lista de listas

$matriz = array($v1, $v2, $v3);


//Imprimir Matriz

print_r($matriz);


//Imprimir parte específica

//Imprime a lista na segunda posição da matriz (0, 1, 2)

echo $matriz[1] . "\n";

//Imprime o elemento na segunda lista da matriz (0, 1, 2) na terceira posição da mesma (0, 1, 2)

echo $matriz[1][2] . "\n";
