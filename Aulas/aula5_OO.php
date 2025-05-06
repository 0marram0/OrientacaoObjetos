<?php

//Classes
class Monitor //Sempre primeira letra maiuscula
{

    //Atributos (primeira letra minuscula)
    public $tamanho;    
    public $cor;
    public $preco;

    //Metodos (primeira letra minuscula)
    function exibirImagem(){
        echo "Monitor exibindo imagem\n";
            $this->tamanho . "\n";
    }
    
    function ligar(){
        echo "Monitor ligado\n";
    }

    function desligar (){
        echo "Monitor desligado\n";
    }
}

//Programa Principal - Iniciará a execução nesta linha

//Objeto (primeira letra minúscula)
$monitorLab = new Monitor(); 

    //Declarar os atributos pro objeto - No php sempre usa operador "->", outros lugares "."
    $monitorLab->tamanho = 21;
    $monitorLab->cor = "Preto";
    $monitorLab->preco = 500;

    //Chamando os métodos do objetos - No php sempre usa operador "->", outros lugares "."
    $monitorLab->ligar();
    $monitorLab->exibirImagem();
    $monitorLab->desligar();

    print_r($monitorLab);

    echo "=================================== \n";
    echo "Dados do monitor: \n";
    echo "Tamanho: " . $monitorLab->tamanho . "\n";
    echo "Cor: " . $monitorLab->cor . "\n";
    echo "Tamanho: " . $monitorLab->preco . "\n";

    //Nao pode fazer isso pois o atributo voltagem não existe na classe do objeto
    //echo "Voltagem " . $monitorLab->voltagem . "\n"; 


//Outro objeto monitor
$monitorOmar = new Monitor();

    $monitorOmar->tamanho = 24;
    $monitorOmar->cor = "Preto";
    $monitorOmar->preco = 900;

    $monitorOmar->ligar();
    $monitorOmar->exibirImagem();
    $monitorOmar->desligar();

    echo "=================================== \n";
    echo "Dados do monitor: \n";
    echo "Tamanho: " . $monitorOmar->tamanho . "\n";
    echo "Cor: " . $monitorOmar->cor . "\n";
    echo "Tamanho: " . $monitorOmar->preco . "\n";