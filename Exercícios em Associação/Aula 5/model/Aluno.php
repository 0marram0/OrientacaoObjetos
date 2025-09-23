<?php

require_once("Pessoa.php");

class Aluno extends Pessoa {

    //Atributos 
    private string $matricula;

    //Métodos
    public function __toString() {
        
        $dados = "Nome: " . $this->getNome() . "\n";
        $dados .= " | RG: " . $this->getRG() . "\n";
        $dados .= " | Idade: " . $this->getIdade() . "\n";
        $dados .= " | Matricula: " . $this->matricula . "\n";
        return $dados;
    }

    //GETs e SETs
    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }

}