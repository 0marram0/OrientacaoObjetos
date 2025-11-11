<?php

require_once("Ingresso.php");

class IngressoVip extends Ingresso{
     
    private float $valorAdicional;

    public function getValorTotal()
    {
        return parent::getValorTotal() + $this->valorAdicional;
    }

    public function getValorAdicional(): float
    {
        return $this->valorAdicional;
    }

    public function setValorAdicional(float $valorAdicional): self
    {
        $this->valorAdicional = $valorAdicional;

        return $this;
    }
}