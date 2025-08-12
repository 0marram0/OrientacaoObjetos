<?php

require_once("model/Cidade.php");
require_once("model/Estado.php");

$cidades = array();

$SC = new Estado();
$SC ->setNome("Santa Catarina") ->setSigla("SC");

$PR = new Estado();
$PR ->setNome("Paraná") ->setSigla("PR");

$florianopolis = new Cidade();
$florianopolis ->setNome("Florianópolis") ->setQtdHabitantes(537211) ->setAltitude(3) ->setEstado($SC);
array_push($cidades, $florianopolis);

$blumenau = new Cidade();
$blumenau ->setNome("Blumenau") ->setQtdHabitantes(368000) ->setAltitude(21) ->setEstado($SC);
array_push($cidades, $blumenau);

$fozIguacu = new Cidade();
$fozIguacu ->setNome("Foz do Iguaçu") ->setQtdHabitantes(295500) ->setAltitude(192) ->setEstado($PR);
array_push($cidades, $fozIguacu);

$cascavel = new Cidade();
$cascavel ->setNome("Cascavel") ->setQtdHabitantes(364104) ->setAltitude(781) ->setEstado($PR);
array_push($cidades, $cascavel);

foreach($cidades as $c){
    print $c;
}

