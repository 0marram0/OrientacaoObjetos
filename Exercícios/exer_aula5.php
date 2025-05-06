<?php

class Humano {

    public $nome;    
    public $endereco;
    public $cidade;
    public $UF;
    public $altura;

    //Metodos (primeira letra minuscula)
    function falarOla(){
        echo "Olá mundo, sou " . $this->nome . "\n";
    }
    
    function falarEndereco(){
        echo "Moro em " . $this->endereco . "," . $this->cidade . "/" . $this->UF . "\n";
    }

    function falarAltura(){
        echo "Tenho " . $this->altura . " metros!" . "\n";
    }

}

$usuário = new Humano(); 

$usuário->nome = readline("Me dê seu nome: ");
$usuário->endereco = readline("Me dê seu endereço: ");
$usuário->cidade = readline("Me dê sua cidade: ");
$usuário->UF = readline("Me dê seu UF: ");
$usuário->altura = readline("Me dê sua altura: ");

$usuário->falarOla();
$usuário->falarEndereco();
$usuário->falarAltura();

