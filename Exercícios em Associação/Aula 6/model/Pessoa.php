<?php

class Pessoa {

    //Atributos
    protected string $nome;

    //GET e SET  

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}