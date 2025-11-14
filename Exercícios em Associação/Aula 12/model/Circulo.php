<?php 

require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica { 

    //Atributos
    private $raio;

    //Metodos
    public function getArea(){
        return 3.14*($this->raio*$this->raio);
    }

    public function getDesenho(){

        echo "           ───────────";
        echo "        /               \\";
        echo "      /                   \\";
        echo "    /                       \\";
        echo "   |                          |";
        echo "  |                            |";
        echo "  |                            |";
        echo "  |                            |";
        echo "  |                            |";
        echo "  |                            |";
        echo "   |                          |";
        echo "    \\                       /";
        echo "      \\                   /";
        echo "        \\               /";
        echo "           ───────────";
    }

    public function getRaio()
    {
        return $this->raio;
    }

    public function setRaio($raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}