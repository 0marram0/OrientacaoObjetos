<?php

require_once("Pessoa.php");

class Professor extends Pessoa {

    //Atributos 
    private float $salario;
    
    //Métodos
    public function __toString() {
        
        $dados = "Nome: " . $this->getNome() . "\n";
        $dados .= " | RG: " . $this->getRG() . "\n";
        $dados .= " | Idade: " . $this->getIdade() . "\n";
        $dados .= " | Salario: " . $this->salario . "\n";
        return $dados;
    }

    //GETs e SETs
    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}