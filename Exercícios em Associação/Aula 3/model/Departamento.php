<?php

class Departamento {

    private string $nome;
    private int $numeroSala;

    public function __toString(){
        $dadosD = $this -> nome . "\n";
        $dadosD = "\n" . "Sala: " . $this->numeroSala . "\n";
        return $dadosD;
    }

    //GETs e SET    

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNumeroSala(): int
    {
        return $this->numeroSala;
    }

    public function setNumeroSala(int $numeroSala): self
    {
        $this->numeroSala = $numeroSala;

        return $this;
    }
}