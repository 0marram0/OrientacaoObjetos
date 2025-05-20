<?php

class Pokemon {

    //Atributos
    public $nome;
    public $tipo;
    public $experiencia;
    public $nivel;
    public $hp;

    public $ataque;
    public $defesa;
    public $velocidade;

    //Construtor
    function __construct($nome, $tipo) {
        $this->experiencia = 0;
        $this->hp = 100;
        $this->nivel = 5;

        $this->ataque = 50;
        $this->defesa = 50;
        $this->velocidade = 50;

        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    //Metodos
    function batalhar() {
        $this->experiencia += 10;
    }

    function aumentarNivel() {
        if($this->experiencia>=50){
            $this->nivel++;
            $this->experiencia = 0;

            $this->aumentarHp();

            $this->evoluir();
        }
    }

    function aumentarHp() {
        $this->hp += 25;
        $this->ataque += 15;
        $this->defesa += 10;
        $this->velocidade += 5;

    }

    function evoluir() {
        if ($this->nivel == 16) {
            if ($this->nome == "Charmander") {
                $this->nome = "Charmileon";
            }
            else if ($this->nome == "Yveltal") {
                $this->nome = "Yveltal";
            }
        }
    }

}

$pokemon1 = new Pokemon("Charmander", "Fogo");
$pokemon1->batalhar();

$pokemon2 = new Pokemon ("Yveltal", "Dark");
$pokemon1->batalhar();
