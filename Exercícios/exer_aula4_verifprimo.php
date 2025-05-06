<?php

do {
    $num = readline("Me passe um número e te falarei se é um número primo: ");
    
    if ($num <= 1) {
        break;
    } elseif (!primo($num)){
        print $num . " é primo. \n";
    } elseif (primo($num)){
        print $num . " não é primo. \n";
    }

} while ($num>1);

function primo($num) {
    for($i=$num-1; $i > 1; $i--){
        if($num%$i == 0) {
            return true; //não primo
        }
    }
        
    return false; //primo

}