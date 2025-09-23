<?php

class Animal {

    //Atributos
    private string $nome;
    private string $raca;
    
    //Métodos
    public function getDados() {
        $dados = "Nome | " . $this->getNome() . "\n";
        $dados .= "Raça | " . $this->getRaca() . "\n";

        return $dados;
    }

    //GETs e SETs
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getRaca(): string
    {
        return $this->raca;
    }

    public function setRaca(string $raca): self
    {
        $this->raca = $raca;

        return $this;
    }
}