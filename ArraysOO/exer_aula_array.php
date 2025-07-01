<?php

class Escola {
    //Atributos
    private $nome;
    private $endereco;
    private $qntdAlunos;

    //Métodos
    public function __toString()
    {
        $dados = "\n";
        $dados .= "Nome: " . $this->nome;
        $dados .= " | Endereço: " . $this->endereco;
        $dados .= " | Quantidade de Alunos: " . $this->qntdAlunos;
        $dados .= "\n";
        
        return $dados;
    }

    //GET e SET
    
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getQntdAlunos()
    {
        return $this->qntdAlunos;
    }

    public function setQntdAlunos($qntdAlunos): self
    {
        $this->qntdAlunos = $qntdAlunos;

        return $this;
    }

} //Fim da Classe

//Programa Principal

$escolas = array();

for($i=0; $i<4; $i++){
   
    $escola[$i] = new Escola();
    $escola[$i]->setNome(readline("Qual o nome da escola: "))
               ->setEndereco(readline("Qual o endereço dessa escola: "))
               ->setQntdAlunos(readline("Quantos alunos tem nessa escola: "));

    array_push($escolas, $escola[$i]);

}


//Dados das escolas lidas

foreach ($escolas as $e){
    echo $e;
}

//Escola com mais alunos

$maisAlunos = $escola[0]->getQntdAlunos();

    foreach($escola as $e){
    
        if($e->getQntdAlunos() > $maisAlunos){
            $maisAlunos = "\n" . $e->getNome() . " é a escola com mais alunos, contendo " . $e->getQntdAlunos() . " alunos." . "\n";
        }

    }

echo $maisAlunos;