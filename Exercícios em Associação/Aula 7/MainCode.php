<?php

require_once("modelo/Poder.php");
require_once("modelo/Curandeiro.php");
require_once("modelo/Combatente.php");

$p1 = new Poder("Recupera energia", 0);
$p2 = new Poder("Recupera energia super", 20);
$p3 = new Poder("Golpe normal", 0);
$p4 = new Poder("Golpe especial", 15);

$curandeiro = new Curandeiro();
$curandeiro->setNome("Presto");
$curandeiro->setPoder($p1);
$curandeiro->setForcaDeCura(100);
$curandeiro->lancarPoder();

$combatente = new Combatente();
$combatente->setNome("Cecil");
$combatente->setPoder($p4);
$combatente->setForcaDeAtaque(200);
$combatente->lancarPoder();