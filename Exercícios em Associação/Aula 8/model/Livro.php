<?php

require_once("Produto.php");

class Livro extends Produto {

    private $autor;

    public function __toString()
    {
        $dados = parent::__toString();
        $dados .= "Autor: " . $this->autor . "\n\n";
        return $dados;
    }


    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}