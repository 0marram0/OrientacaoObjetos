<?php

class Retangulo
{

    public $altura;
    public $base;

    function __construct($b, $a){
        $this->base = $b;
        $this->altura = $a;
    }

    function calcularArea()
    {
        echo "A área do triângulo é ", $this->altura * $this->base, "cm²" . "\n";
    }

    function calcularPerimetro()
    {
        echo "O perímetro do triângulo é ", ($this->altura * 2) + ($this->base * 2), "cm" . "\n";
    }
}

$retangulo1 = new Retangulo(readline("Me dê a base do retângulo em cm: "), readline("Me dê a altura do retângulo em cm: "));

$retangulo1->calcularArea();
$retangulo1->calcularPerimetro();