<?php

class Produto {

    private $descricao;
    private $unidadeMedida;

    public function __toString()
    {
        $dados = "Descricao: " . $this->descricao . "\n";
        $dados .= "Unidade de Medida: " . $this->unidadeMedida . "\n";
        return $dados; 
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }
}