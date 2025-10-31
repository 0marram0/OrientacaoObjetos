<?php

require_once("Produto.php");

class Balde extends Produto {

    private $capacidade;
    
    public function __toString()
    {
        $dados = parent::__toString();
        $dados .= "Capacidade: " . $this->capacidade . "\n\n";
        return $dados;
    }

    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}