<?php

require_once("model/Balde.php");
require_once("model/Computador.php");
require_once("model/Livro.php");
require_once("model/Produto.php");

$produto1 = new Produto();
$produto1->setDescricao("Produto Ótimo")->setUnidadeMedida("Centimetros Cubicos");
print($produto1);

$balde1 = new Balde();
$balde1->setCapacidade("50L")->setDescricao("Grande e Resistente Balde")->setUnidadeMedida("Litros");
print($balde1);

$pc1 = new Computador();
$pc1->setProcessador("I5-13400KF")->setMemoria("32GB Ram")->setDescricao("PC Gamer Veloz")->setUnidadeMedida("Centímetros");
print($pc1);

$livro1 = new Livro();
$livro1->setAutor("J.R.R Tolkien")->setDescricao("Livro The Hobbit Aventuras Especiais")->setUnidadeMedida("Páginas");
print($livro1);

