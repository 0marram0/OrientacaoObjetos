<?php

require_once("Produto.php");

class Computador extends Produto {

    private $processador;
    private $memoria;

    public function __toString()
    {
        $dados = parent::__toString();
        $dados .= "Processador: " . $this->processador . "\n";
        $dados .= "Memoria: " . $this->memoria . "\n\n";
        return $dados;
    }

    public function getProcessador()
    {
        return $this->processador;
    }

    public function setProcessador($processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    public function getMemoria()
    {
        return $this->memoria;
    }

    public function setMemoria($memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }
}