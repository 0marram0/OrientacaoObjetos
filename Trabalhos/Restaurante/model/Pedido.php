<?php

require_once("model/Prato.php");

class Pedido {

    //Atributos

    private string $nomeCliente;
    private string $nomeGarcom;
    private Prato $prato;

    //Métodos

    public function __toString() {
        $dadosPedido = "O cliente " . $this->nomeCliente . " foi atendido pelo garçom " . $this->nomeGarcom . ", pediu um prato de " . $this->prato->getNome() . " no valor de R$ " . $this->prato->getValor() . "\n";
        return $dadosPedido;
    }

    //GETs e SETs

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function setNomeCliente(string $nomeCliente): self
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    public function getNomeGarcom(): string
    {
        return $this->nomeGarcom;
    }

    public function setNomeGarcom(string $nomeGarcom): self
    {
        $this->nomeGarcom = $nomeGarcom;

        return $this;
    }

    public function getPrato(): Prato
    {
        return $this->prato;
    }

    public function setPrato(Prato $prato): self
    {
        $this->prato = $prato;

        return $this;
    }
}