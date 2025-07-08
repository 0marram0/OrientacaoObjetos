<?php

class Pessoa {

    //Atributos
    private $nome;
    private $sobrenome;
    private $idade;

    //Métodos
    public function __toString(){
        $dados = $this->nome . " " . $this->sobrenome . ", " . $this->idade . " anos. " . "\n";
        return $dados;
    }

    //GETs e SETs

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

//Programa

$pessoas = array();

do {

    echo "\n----------MENU----------\n";
    echo "1- Cadastrar" . "\n";
    echo "2- Listar" . "\n";
    echo "0- Sair" . "\n";

    $opcao = readline(("Informe a opção: "));
    
    if($opcao == 1){
        
        //Cadastrar
        echo "\n";

        $pessoa = new Pessoa;
        $pessoa->setNome(readline("Informe o nome: "));
        $pessoa->setSobrenome(readline("Informe o sobrenome: "));
        $pessoa->setIdade(readline("Informe a idade: "));

        array_push($pessoas, $pessoa);

    } elseif ($opcao == 2) {
    
        //Listar
        echo "\n";

        if(count($pessoas) < 1){
            echo "Nenhuma pessoa cadastrada" . "\n";
        } else {
            foreach($pessoas as $p){
                echo $p;
            }
        }

    } elseif ($opcao == 0) {
    
        echo "Programa Encerrado!" . "\n";
    } else {
        echo "Opção inválida!" . "\n";
    }

} while ($opcao != 0);
