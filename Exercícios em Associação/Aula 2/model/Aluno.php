<?php

require_once("Turma.php");

class Aluno {

    private string $nome;
    private string $idade;
    private Turma $turma;

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

    public function getIdade(): string
    {
        return $this->idade;
    }

    public function setIdade(string $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getTurma(): Turma
    {
        return $this->turma;
    }

    public function setTurma(Turma $turma): self
    {
        $this->turma = $turma;

        return $this;
    }
}