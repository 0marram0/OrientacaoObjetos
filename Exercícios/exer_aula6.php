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
        echo "A área do retângulo é ", $this->altura * $this->base, "cm²" . "\n";
    }

    function calcularPerimetro()
    {
        echo "O perímetro do retângulo é ", ($this->altura * 2) + ($this->base * 2), "cm" . "\n";
    }
}

for ($i=0; $i < 3; $i++) { 
    
    $retangulo1 = new Retangulo(readline("Me dê a base do retângulo em cm: "), readline("Me dê a altura do retângulo em cm: "));

    $retangulo1->calcularArea();
    $retangulo1->calcularPerimetro();
}
