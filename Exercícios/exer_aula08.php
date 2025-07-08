<?php 

class Pessoa {

    //Atributos
    private $nome;
    private $endereco;
    private $cidade;
    private $UF;
    private $altura;

    //Metodos
    public function getApresentacao(){
        echo "Olá mundo, sou " . $this->nome . ", resido na " . $this->endereco . ", " . $this->cidade . "-" . $this->UF . " e possuo uma altura de " . $this->altura . "!" . "\n";
    }

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
   

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getUF()
    {
        return $this->UF;
    }

    public function setUF($UF): self
    {
        $this->UF = $UF;

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

$pessoa1 = new Pessoa();
$pessoa1->setNome("Pietro Moro Sepp");
$pessoa1->setEndereco("Rua Bolívia 774, Jardim América");
$pessoa1->setCidade("Foz do Iguaçu");
$pessoa1->setUF("PR");
$pessoa1->setAltura("1,65m");
$pessoa1->getApresentacao();

$pessoa = new Pessoa();
$pessoa->setNome("Eduardo Gonnela");
$pessoa->setEndereco("Rua Castelo Branco 127, Centro");
$pessoa->setCidade("Foz do Iguaçu");
$pessoa->setUF("PR");
$pessoa->setAltura("1,70m");
$pessoa->getApresentacao();

