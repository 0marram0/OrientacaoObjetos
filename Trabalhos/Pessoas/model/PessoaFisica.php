<?php 

require_once("Pessoa.php");

class PessoaFisica extends Pessoa {

    //Atributos
    private int $idade;
    private string $cpf;

    //Métodos
    public function __toString(){
        $dados = "Nome: " . $this->getNome() . "\n";
        $dados .= "Idade: " . $this->idade . "\n"; 
        $dados .= "CPF: " . $this->cpf . "\n"; 
        return $dados;
    }

    //GET e SET
    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}