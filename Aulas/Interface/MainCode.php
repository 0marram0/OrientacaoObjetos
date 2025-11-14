<?php

require_once("model/RadioPortatil.php");
require_once("model/RadioRelogio.php");


$radio = new RadioPortatil();
echo "Rádio está " . $radio->getStatus() . ". \n";

$radio->ligar();
echo "Rádio está " . $radio->getStatus() . ". \n";

$radioRelogio = new RadioRelogio();
$radioRelogio->ligar();
$radioRelogio->desligar();
echo $radioRelogio->mostrarHora();