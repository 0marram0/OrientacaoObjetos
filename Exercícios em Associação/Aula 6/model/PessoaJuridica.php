<?php 

require_once("Pessoa.php");

class PessoaJuridica extends Pessoa {
    
    //Atributos
    private string $nomeFantasia;
    private string $cnpj;

    //Métodos
    public function __toString(){
        $dados = "Nome: " . $this->getNome() . "\n";
        $dados .= "Nome Fantasia: " . $this->nomeFantasia . "\n"; 
        $dados .= "CNPJ: " . $this->cnpj . "\n"; 
        return $dados;
    }

    //GET e SET
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}