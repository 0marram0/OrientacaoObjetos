<?php 

require_once("IFormaGeometrica.php");

class Quadrado implements IFormaGeometrica{

    //Atributos
    private $lado;

    //Metodos
    public function getArea(){
        return $this->lado*$this->lado;
    }

    public function getDesenho(){
        echo ("┌───────────────────┐");
        echo ("│                   │");
        echo ("│                   │");
        echo ("│                   │");
        echo ("│                   │");
        echo ("│                   │");
        echo ("│                   │");
        echo ("│                   │");
        echo ("│                   │");
        echo ("│                   │");
        echo ("└───────────────────┘");
    }

    public function getLado()
    {
        return $this->lado;
    }

    public function setLado($lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}