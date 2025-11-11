<?php

require_once("model/Ingresso.php");
require_once("model/IngressoVip.php");

$ingresso = new Ingresso;
$ingresso -> setValor(100);
echo "O valor do ingresso simples é: " .  $ingresso->getValorTotalFormatado() . "\n";

$ingressoVip = new IngressoVip;
$ingressoVip -> setValor(100);
$ingressoVip -> setValorAdicional(50);
echo "O valor do ingresso VIP é: " . $ingressoVip->getValorTotalFormatado() . "\n";