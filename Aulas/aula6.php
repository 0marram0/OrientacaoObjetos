<?php

class Aluno {
    
    //Atributos
    private $nome;
    private $matricula;
    private $curso;

    //Construtor
    public function __construct($n, $m, $c){
        $this->nome = $n;
        $this->matricula = $m;
        $this->curso = $c;
    }

    //Métodos
    public function estudar(){
        echo "Aluno estudando" . "\n";
    }

    public function irBanheiro(){
        echo "Aluno indo ao banheiro";
    }

    //GETs e SETs
    /*public function getNome(){
        return $this->nome
    }

    public function setNome($nome){
        $this->nome = $nome;
    }*/

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso): self
    {
        $this->curso = $curso;

        return $this;
    }
}

//Programa principal
$aluno = new Aluno("Rodrigo", 0030072, "Aquicultura");
echo "O nome do aluno é " . $aluno->getNome() . "\n";