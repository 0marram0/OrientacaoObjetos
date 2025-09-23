<?php

require_once("model/Aluno.php");
require_once("model/Professor.php");
require_once("model/Pessoa.php");

//Criar um Aluno
$aluno = new Aluno;
$aluno -> setMatricula("123456") -> setNome("Andersom") -> setRG(60731) -> setIdade(10);

//Criar um Professor
$professor = new Professor;
$professor -> setSalario(5678) -> setNome("Tomazio") -> setRG(34345) -> setIdade(76);

echo $aluno . "\n";
echo $professor . "\n";