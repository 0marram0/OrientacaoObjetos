<?php

abstract class Midia {
    
    private string $descricao;
    private string $preco;

    public function __construct($d, $p) {
        $this->descricao = $d;
        $this->preco = $p;
    }

    public function __toString()
    {
        $dados = "Tipo: " . $this->getTipo();
        $dados .= " | Descrição: " . $this->descricao;
        $dados .= " | Preço: " . $this->preco;  
        return $dados;
    }

    public abstract function getTipo();

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getPreco(): string
    {
        return $this->preco;
    }

    public function setPreco(string $preco): self
    {
        $this->preco = $preco;

        return $this;
    }
}