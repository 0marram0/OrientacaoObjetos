<?php

class Ingresso {
    
    protected float $valor;

    public function getValorTotal(){
        return $this->valor;
    }
    
    public function getValorTotalFormatado(): string{
        return "R$" . number_format($this->getValorTotal(), 2, ",", ".");
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}