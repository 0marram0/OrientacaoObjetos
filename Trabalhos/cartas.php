<?php

class Carta {

    //Atributos

    private int $numero;
    private string $nome;
    private int $custo;
    private string $raridade;
    private string $velocidade;

    //Métodos

    public function __toString() {
        $atributos = "\n ========== CARTA "  . $this->numero . " ========== \n";
        $atributos .= "Nome: " . $this->nome . "\n";
        $atributos .= "Custo: " . $this->custo . "\n";
        $atributos .= "Raridade: " . $this->raridade . "\n";
        $atributos .= "Velocidade: " . $this->velocidade . "\n";
        $atributos .= " ============================== \n";
        return $atributos;
    }

    public function sortearDicas(){
        $atributos = [ 
            "Custo" => $this->custo,
            "Raridade" => $this->raridade,
            "Velocidade" => $this->velocidade,
        ];

        $dicaSorteada = array_rand($atributos);
        return "Dica: " . $dicaSorteada . " = " . $atributos[$dicaSorteada];
    }

    //GETs e SETs

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCusto(): int
    {
        return $this->custo;
    }

    public function setCusto(int $custo): self
    {
        $this->custo = $custo;

        return $this;
    }

    public function getRaridade(): string
    {
        return $this->raridade;
    }

    public function setRaridade(string $raridade): self
    {
        $this->raridade = $raridade;

        return $this;
    }

    public function getVelocidade(): string
    {
        return $this->velocidade;
    }

    public function setVelocidade(string $velocidade): self
    {
        $this->velocidade = $velocidade;

        return $this;
    }
}

//Programa

//Definindo as Cartas

$baralho = array();

$carta1 = new Carta;
$carta1->setNumero(1) ->setNome("Bombardeiro") ->setCusto(2) ->setRaridade("Comum") ->setVelocidade("Média");
array_push($baralho, $carta1);

$carta2 = new Carta;
$carta2->setNumero(2) ->setNome("Goblins") ->setCusto(2) ->setRaridade("Comum") ->setVelocidade("Muito Rápida");
array_push($baralho, $carta2);

$carta3 = new Carta;
$carta3->setNumero(3) ->setNome("Cavaleiro") ->setCusto(3) ->setRaridade("Comum") ->setVelocidade("Média");
array_push($baralho, $carta3);

$carta4 = new Carta;
$carta4->setNumero(4) ->setNome("Mini P.E.K..K.A") ->setCusto(4) ->setRaridade("Raro") ->setVelocidade("Rápida");
array_push($baralho, $carta4);

$carta5 = new Carta;
$carta5->setNumero(5) ->setNome("Corredor") ->setCusto(4) ->setRaridade("Raro") ->setVelocidade("Muito Rápida");
array_push($baralho, $carta5);

$carta6 = new Carta;
$carta6->setNumero(6) ->setNome("Mago") ->setCusto(5) ->setRaridade("Raro") ->setVelocidade("Média");
array_push($baralho, $carta6);

$carta7 = new Carta;
$carta7->setNumero(7) ->setNome("Bebê Dragão") ->setCusto(4) ->setRaridade("Épico") ->setVelocidade("Rápida");
array_push($baralho, $carta7);

$carta8 = new Carta;
$carta8->setNumero(8) ->setNome("Lançador") ->setCusto(5) ->setRaridade("Épico") ->setVelocidade("Lenta");
array_push($baralho, $carta8);

$carta9 = new Carta;
$carta9->setNumero(9) ->setNome("Príncipe") ->setCusto(5) ->setRaridade("Épico") ->setVelocidade("Média");
array_push($baralho, $carta9);

$carta10 = new Carta;
$carta10->setNumero(10) ->setNome("Lenhador") ->setCusto(4) ->setRaridade("Lendário") ->setVelocidade("Muito Rápida");
array_push($baralho, $carta10);

$carta11 = new Carta;
$carta11->setNumero(11) ->setNome("Mago Elétrico") ->setCusto(4) ->setRaridade("Lendário") ->setVelocidade("Rápida");
array_push($baralho, $carta11);

$carta12 = new Carta;
$carta12->setNumero(12) ->setNome("Pescador") ->setCusto(3) ->setRaridade("Lendário") ->setVelocidade("Lenta");
array_push($baralho, $carta12);

//Jogo

$opcao1 = 0;
$pontuacao = 0;
$paplite = "";

do {

    echo "\n" . "========== ADIVINHE A CARTA ==========";
    echo "\n" . "======== Clash Royale Edition ========" . "\n" . "\n";
    
    echo "- Acerto  -> 10 pontos " . "\n";
    echo "- Dica    -> -2 pontos " . "\n";
    echo "- Erro    -> -1 ponto" . "\n" . "\n";

    echo "1- Adivinhar" . "\n";
    echo "2- Pontuação" . "\n";
    echo "0- Sair" . "\n" . "\n";

    $opcao1 = readline("Escolha a opção: ");

    if ($opcao1 == 1) {
        
        $sorteada = $baralho[array_rand($baralho)];
        $pontos = 10;

        foreach ($baralho as $b) {
            echo $b;
        }
            
            do {

                echo "\n" . "-------------------------------" . "\n";
                echo "1- Adivinhar" . "\n";
                echo "2- Dica" . "\n" . "\n";
                $opcao2 = readline("Escolha a opção: ");

                if ($opcao2 == 1) { 
                    echo "\n" . "-------------------------------" . "\n";
                    $paplite = readline("Carta escolhida: ");

                    if ($paplite == $sorteada->getNumero()) {
                        if ($pontos <=0) {
                            echo "Carta correta, mas você infelizmente não ganhou nada." . "\n";
                            $pontuacao += $pontos;
                            echo "\n" . "-------------------------------" . "\n";
                        } else {
                            echo "Carta correta!" . "\n";
                            echo "Você ganhou " . $pontos . " pontos!";
                            $pontuacao += $pontos;
                            echo "\n" . "-------------------------------" . "\n";
                        }                  
                    } else {
                        echo "Carta errada." . "\n";
                        $pontos--;

                        if ($pontos <= 0) {
                            $pontos = 0;
                            echo "Você errou muito, e não ganhará nada caso acerte agora.";
                            echo "\n" . "-------------------------------" . "\n";
                        } else {
                            echo "Agora, caso acerte, ganharás " . $pontos . " pontos.";
                            echo "\n" . "-------------------------------" . "\n";
                        }
                    }
                } elseif ($opcao2 == 2) {
                    echo "\n";
                    echo $sorteada->sortearDicas() . "\n";
                    $pontos -= 2;
                    echo "Agora, caso acerte, ganharás " . $pontos . " pontos.";
                    echo "\n" . "-------------------------------" . "\n";
                }

            } while ($paplite != $sorteada->getNumero());
        
    } elseif ($opcao1 == 2) {
        echo "\n" . "Sua pontuação é de " . $pontuacao . " pontos!" . "\n";
    } elseif ($opcao1 == 0) {
        echo "\n" . "Programa finalizado!" . "\n";
    } else {
        echo "\n" . "Opção Inválida!" . "\n";
    }


} while ($opcao1 != 0);

