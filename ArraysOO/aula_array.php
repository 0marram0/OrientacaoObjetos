<?php

class Robo {
    //Atributos
    private $velocidade;
    private $tipo;
    private $peso;

    //Métodos
    public function ligar() {
        echo "Robo ligado" . "\n";
    }

    public function mover() {
        echo "Robo movendo" . "\n";
    }

    public function __toString() {
        $dados = "Velocidade: " . $this->velocidade;
        $dados .= " | Tipo: " . $this->tipo;
        $dados .= " | Peso: " . $this->peso;
        $dados .= "\n";
        
        return $dados;
    }

    public function getVelocidade()
    {
        return $this->velocidade;
    }

    public function setVelocidade($velocidade): self
    {
        $this->velocidade = $velocidade;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }

} //Fim da classe Robo

//Programa Principal

$robo1 = new Robo();
$robo1->setPeso(500);
$robo1->setTipo("Lego");
$robo1->setVelocidade(5);

$robo2 = new Robo();
$robo2->setPeso(1000)->setTipo("Arduino")->setVelocidade(10);

$robo3 = new Robo();
$robo3->setPeso(1500)
      ->setTipo("Arduino")
      ->setVelocidade(7);

//Criando uma lista de objetos

$robos = array($robo1, $robo2);

array_push($robos, $robo3);


//Chamar o método ligar do robo2 a partir do array
$robos[1]->ligar();
$robos[0]->mover();

//Acessar todos os elementos (objetos) do array
foreach($robos as $r){
    echo $r;
}