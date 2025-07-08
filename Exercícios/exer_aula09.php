<?php

class Calculadora{
    //Atributos
    private $numA;
    private $numB;

    //Metodos
    public function soma(){
        return $this->numA + $this->numB;
    }

    public function subtracao(){
        return $this->numA - $this->numB;
    }
    
    public function multiplicacao(){
        return $this->numA * $this->numB;
    }

    public function divisao(){
        return $this->numA / $this->numB;
    }

    public function getNumA()
    {
        return $this->numA;
    }

    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    public function getNumB()
    {
        return $this->numB;
    }

    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}

//Programa Principal

$numA = readline("Informe o número A: ");

$calculo1 = new Calculadora();
$calculo1->setNumA($numA);
$calculo1->setNumB($numB);

echo "Soma: " . $soma . "\n";
echo "Subtração: " . $subtracao . "\n";
echo "Multiplicação: " . $multiplicacao . "\n";
echo "Divisão: " . $divisao . "\n";
