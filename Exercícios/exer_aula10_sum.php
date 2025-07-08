<?php

class Receita {

    //Atributos
    private $descricao;
    private $valor;

    //Métodos
    public function __toString(){
        $dadosReceita = $this->descricao . ": R$" . $this->valor . "\n";
        return $dadosReceita;
    }

    //GETs e SETs

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

class Despesa {

    //Atributos
    private $descricao;
    private $valor;

    //Métodos
    public function __toString(){
        $dadosDespesa = $this->descricao . ": R$" . $this->valor . "\n";
        return $dadosDespesa;
    }

    //GETs e SETs
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

//Programa Principal

$receitas = array();
$despesas = array();

do {

    echo "\n". "----------MENU----------" . "\n";
    echo "1- Adicionar Receita" . "\n";
    echo "2- Adicionar Despesa" . "\n";
    echo "3- Listar Receitas" . "\n";
    echo "4- Listar Despesas" . "\n";
    echo "5- Sumarizar" . "\n";
    echo "0- Sair" . "\n";
    echo "\n";

    $opcao = readline("Informe uma opção: ");

    if($opcao == 1) {   
        //Adicionar Receita

        $receita = new Receita;
        $receita->setDescricao(readline("Informe como obteve a receita: "));
        $receita->setValor(readline("Informe o valor da receita: "));

        array_push($receitas, $receita);

    } else if ($opcao == 2) {      
        //Adicionar Despesa

        $despesa = new Despesa;
        $despesa->setDescricao(readline("Informe onde obteve essa despesa: "));
        $despesa->setValor(readline("Informe o valor da despesa: "));

        array_push($despesas, $despesa);

    } else if ($opcao == 3) { 
        //Listar Receitas

        echo "\n";

        if(count($receitas) < 1) {
            echo "Você ainda não possuí nenhuma receita!" . "\n";
        } else {
            foreach ($receitas as $r) {
                echo $r;
            }
        }

    } else if ($opcao == 4) {
        //Listar Despesas

        echo "\n";

        if(count($despesas) < 1) {
            echo "Você ainda não possuí nenhuma depesa!" . "\n";
        } else {
            foreach ($despesas as $d) {
                echo $d;
            }
        }

    } else if ($opcao == 5) {
        //Sumarizar

        $valorReceitas = 0;
        $valorDespesas = 0;
        $saldoTotal = 0;

        foreach($receitas as $r){
            $valorReceitas += $r->getValor();
        }

        foreach($despesas as $d){
            $valorDespesas += $d->getValor();
        }

        $saldoTotal = $valorReceitas - $valorDespesas;

        echo "\n";
        echo "Saldo: R$" . $saldoTotal . "\n";
        echo "Total de receitas: R$" . $valorReceitas . "\n";
        echo "Total de despesas: R$" . $valorDespesas . "\n";

    } else if ($opcao == 0) {
        //Sair

        echo "Programa encerrado!" . "\n";
    } else {
        echo "Opção inválida!" . "\n";
    }

} while ($opcao != 0);


