<?php


class Pessoa {
    
    //Atributos
    private string $nome;
    private int $RG;
    private int $idade;

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

    public function getRG(): int
    {
        return $this->RG;
    }

    public function setRG(int $RG): self
    {
        $this->RG = $RG;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}