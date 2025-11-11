<?php

abstract class Calculadora {

    protected $numA;
    protected $numB;

    public abstract function calcular();

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