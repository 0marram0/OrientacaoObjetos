<?php

class Animal {

    public $especies;
    public $patas;
    public $pele;
    public $movimento;
    
    function __construct($a, $b, $c, $d){
        $this->especies = $a;
        $this->patas = $b;
        $this->pele = $c;
        $this->movimento = $d;
    }

    function declarar(){
        echo $this->especies, ": \n \n";
        echo "Patas: ", $this->patas, " \n";
        echo "Pele: ", $this->pele, " \n";
        echo "Movimento: ", $this->movimento, " \n";
    }

    function movimentando(){
        if ($this->movimento == "Terrestre") {
            echo $this->especies, " caminha lentamente pela fazenda. \n";
        } else if ($this->movimento == "Aéreo") {
            echo $this->especies, " voa com grandes rasantes nos ar. \n";
        } else if ($this->movimento == "Aquático") {
            echo $this->especies, " nada em movimentos suaves na lagoa. \n";
        }
    }

    function emitirSom() {                                      
        if ($this->especies == "Galinha") {
            echo "Pó pó pó \n \n \n";
        } else if ($this->especies == "Porco") {
            echo "Oinc oinc \n \n \n";
        } else if ($this->especies == "Vaca") {
            echo "Muuuuuuuu \n \n \n";
        } else if ($this->especies == "Arara") {
            echo "Reco reco \n \n \n";
        } else if ($this->especies == "Cavalo") {
            echo "Pocotó pocotó \n \n \n";
        }   
    }

}


$animal1 = new Animal("Galinha", 2, "Pena", "Terrestre");
$animal2 = new Animal("Porco", 4, "Couro", "Terrestre");
$animal3 = new Animal("Vaca", 4, "Couro", "Terrestre");
$animal4 = new Animal("Arara", 2, "Pena", "Aéreo");
$animal5 = new Animal("Cavalo", 4, "Couro", "Terrestre");

$animal1->declarar();
$animal1->movimentando();
$animal1->emitirSom();

$animal2->declarar();
$animal2->movimentando();
$animal2->emitirSom();

$animal3->declarar();
$animal3->movimentando();
$animal3->emitirSom();

$animal4->declarar();
$animal4->movimentando();
$animal4->emitirSom();

$animal5->declarar();
$animal5->movimentando();
$animal5->emitirSom(); 
