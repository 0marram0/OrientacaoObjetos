<?php 

abstract class Funcionario {
    protected string $nome;   

    abstract public function getCalcularSalario();

    abstract public function getCargo();

    public function __toString(){
        $dados = "O funcionário " . $this -> nome . ", cargo " . $this -> getCargo() . ", possui salário de R$ " . $this -> getCalcularSalario();
        return $dados;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}

 ?>
