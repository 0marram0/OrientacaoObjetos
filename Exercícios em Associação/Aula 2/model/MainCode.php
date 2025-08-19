<?php

require_once("model/Turma.php");
require_once("model/Aluno.php");

$tds2 = new Turma;
$tds2->setNome("2 TDS")
     ->setCurso("Técnico em Desenvolvimento de Sistemas");

for ($i=1; $i<5; $i++){
    echo "\n-----ALUNO " . $i . "-----\n";
    $aluno = new Aluno();
    $aluno->setNome(readline("Informe o nome: "))
          ->setIdade(readline("Informe a idade: "))
          ->setTurma($tds2);
     $tds2->addAluno($aluno);

}

echo "\n\nDados da turma:\n";
echo "Nome: " . $tds2->getNome() . " | Curso: " . $tds2->getCurso() . "\n";

echo "Alunos:\n";
foreach($tds2->getAlunos() as $a)
    echo " - " . $a->getNome() . ", " . $a->getIdade() . " anos\n";