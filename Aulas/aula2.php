<?php

function exercicio3ap() {

    for ($ano=1980; $ano <= 2024; $ano++){  
        
        if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 4 == 0 and $ano % 400 == 0)){
            echo $ano . "\n";
        }

    }

}


function aula_rl () {

    $nome = readline("Informe seu nome: ");
    echo $nome;

    $sobrenome = readline("Informe seu sobrenome: ");
    echo $sobrenome;

    $idade = (int)readline("Informe sua idade: ");
    echo $idade;
    // O int fará readline ser recebido como um número e não como string. Entretanto, mesmo como string o php indentificará e fará funcionar normalmente.

}


function exercicio1() {

    for($i = 0; $i < 10; $i++){

        $num = (int)readline("Fale 1 número: " . "\n");

        if ($num < 0){
            echo $num . " é negativo" . "\n";
        } else if ($num > 0){
            echo $num . " é positivo" . "\n";
        }

    }
}


function exercicio2() {

    $num = (int)readline("Informe um número, e lhe passarei seus antecessores até o 0: ");
    $i = $num;

    if($num > 0){  

        do{
            echo $i . "\n";
            $i--;
        } while ($i != 0);
        echo $i;

    }

    if($num < 0){       
        
        do{
            echo $i . "\n";
            $i++;
        } while ($i != 0);
        echo $i;

    }

}


function exercicio3() {

    $rep = 5;

    do{

        $rep--;

        echo "Informarei seu IMC" . "\n";

        $nome = readline("Me diz teu nome: ");
        $alt = readline("Me diz tua altura em metros no formato x.yz: ");
        $kg = readline("Me diz teu peso: " . "\n");

        $IMC = $kg/($alt*$alt);

        echo "Senhor(a) " . $nome . ", com sua altura de " . $alt . ", e pesando " . $kg . " kilos, vosso IMC é equivalente a: " . $IMC . "\n" . "\n";

    } while($rep > 0);   

}


function listaex1() {    

    $num = readline("Me informe um número: ");

    if($num > 0){
        $res = $num*2;
    } else if ($num < 0){
        $res = $num*3;
    }

    echo $res;

}


function listaex2() {

    $din = 0;

    do{
        
        $doa = readline("Quanto vc doará pras comidas? ");
        $din += $doa;

    }while ($doa != 0);

    echo "Total de doações para comidas é: " . $din . "\n";
}


function listaex3(){

    $num1 = readline("Me dê o primeiro número: ");
    $num2 = readline("Me dê o primeiro número: ");
    $num3 = readline("Me dê o primeiro número: ");
    
    if ($num1 < $num2 and $num1 < $num3){
        echo "O menor é o número: " . $num1;
    } elseif ($num2 < $num1 and $num2 < $num3){
        echo "O menor é o número: " . $num2;
    } else {
        echo "O menor é o número: " . $num3;
    }

    echo "\n";

}


function listaex4(){

    for($i = 0; $i < 9; $i++){
        
        $num = readline("Informe um número: ");

        if($num%2 == 0){
            echo "Esse número é par" . "\n";
        } else {
            echo "Esse número é ímpar" . "\n";
        }

    }

}

listaex4();
