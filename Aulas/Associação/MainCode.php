<?php

require_once("model/Clube.php");
require_once("model/Jogador.php");

$gremio = new Clube();
$gremio->setNome("Grêmio") ->setDivisao("B") ->setAnoFundacao(1903);

$jogador = new Jogador();
$jogador->setNome("Braithwaite") ->setNumero(9) ->setPosicao("Atacante") ->setClube($gremio);

//Imprimir os dados

print "Dados do Jogador: \n";
print "Nome: " . $jogador->getNome() . "\n";
print "Número: " . $jogador->getNumero() . "\n";
print "Posição: " . $jogador->getPosicao() . "\n";
print "Clube: " . $jogador->getClube()->getNome() . "\n";