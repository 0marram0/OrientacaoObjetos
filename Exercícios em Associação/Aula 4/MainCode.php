<?php

require_once("model/Animal.php");
require_once("model/Cachorro.php");
require_once("model/Gato.php");

$dog1 = new Cachorro;
$dog1 -> setNome("Bob") -> setRaca("Pug");

$dog2 = new Cachorro;
$dog2 -> setNome("Adolf") -> setRaca("Pastor Alemão");

$gato1 = new Gato;
$gato1 -> setNome("Tobbe") -> setRaca("Persa");

$gato2 = new Gato;
$gato2 -> setNome("Omar") -> setRaca("Arabico");

echo $dog1 . "\n";
echo $dog2 . "\n";
echo $gato1 . "\n";
echo $gato2 . "\n";