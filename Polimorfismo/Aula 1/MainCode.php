<?php

require_once("model/Sobrecarga.php");
require_once("model/Animal.php");
require_once("model/Cachorro.php");
require_once("model/BassetHound.php");
require_once("model/Gato.php");

$animal = new Animal();
echo $animal->falar() . "\n";

$cao = new Cachorro();
echo $cao->falar() . "\n";

$gato = new Gato();
echo $gato->falar() . "\n";
echo $gato->falarAnimal() . "\n";

$basset = new BassetHound();
echo $basset->falar() . "\n";


/*
$sobre = new Sobrecarga;
$sobre->escrever("O programa amar para casar, incentiva o amor antes de qualquer coisa em um relacionamentos, hoje em dia, muito superficiais, pois não há amor mutuo.");
$sobre->escrever("O programa amar para casar possuí 5 anos de idade e nasceu em Olinda-PE");
$sobre->escrever();
*/