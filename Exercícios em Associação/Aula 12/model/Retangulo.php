<?php 

require_once("IFormaGeometrica.php");

class Retangulo implements IFormaGeometrica{

    //Atributos
    private $base;
    private $altura;

    //Metodos
    public function getArea(){
        return $this->base*$this->altura;
    }

    public function getDesenho(){
        
        echo ("┌─────────────────────────────────┐\n");
        echo ("│                                 │\n");
        echo ("│                                 │\n");
        echo ("│                                 │\n");
        echo ("│                                 │\n");
        echo ("│                                 │\n");
        echo ("│                                 │\n");
        echo ("│                                 │\n");
        echo ("│                                 │\n");
        echo ("└─────────────────────────────────┘\n");
    }

    public function getBase()
    {
        return $this->base;
    }

    public function setBase($base): self
    {
        $this->base = $base;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}