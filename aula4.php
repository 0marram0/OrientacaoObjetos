<?php

function divisaoExata($dividendo, $divisor) {
    return ($dividendo % $divisor == 0);

    /*
    if($dividendo % $divisor == 0)
        return true;
    else 
        return false;
    */
}


//Programa Principal
$num = 2;
while($num > 1) {
    $num = readline("Informe um número: ");

    //Mostrar divisores do número lido
    $limite = ceil ($num/2);
    for($i=$limite; $i>0; $i--) {
        if(divisaoExata($num, $i)) {
            if($i == 1)
                echo $i . "\n";
            else
                echo $i . ", ";
        }
      }
}