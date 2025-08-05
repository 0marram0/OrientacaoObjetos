<?php 

class Livro {

    //Atributos
    private $titulo;
    private $autor;
    private $genero;
    private $quantidadePaginas;
    private $valorPago;

    //Métodos
    
    public function __toString()
    {
        $dados = "\nLivro:\n" . "Titulo: " . $this->titulo . "\n" . "Autor: " . $this->autor . "\n" . "Gênero: " . $this->genero . "\n" . "Quantidade de Páginas: " . $this->quantidadePaginas . "\n" . "Preço: " . $this->valorPago . "\n" . "\n";
        return $dados;
    }

    //GETs e SETs
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
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

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getQuantidadePaginas()
    {
        return $this->quantidadePaginas;
    }

    public function setQuantidadePaginas($quantidadePaginas): self
    {
        $this->quantidadePaginas = $quantidadePaginas;

        return $this;
    }

    public function getValorPago()
    {
        return $this->valorPago;
    }

    public function setValorPago($valorPago): self
    {
        $this->valorPago = $valorPago;

        return $this;
    }
} 

//Programa Principal
$livros = array();

do {
    echo "\n---------- MENU ----------\n";
    echo "1- Inserir Livro\n";
    echo "2- Listar Livros\n";
    echo "3- Buscar Livro\n";
    echo "4- Total Gasto\n";
    echo "0- Sair\n";
    echo "\n";

    $option = readline("Escolha uma opção: ");
    echo "\n";

    if ($option == 1) {

        //Inserir
        $livro = new Livro;
        $livro->setTitulo(readline("Título da obra: "))
                ->setAutor(readline("Nome do autor da obra: "))
                ->setGenero(readline("Gênero da obra: "))
                ->setQuantidadePaginas(readline("Quantidade de páginas: "))
                ->setValorPago(readline("Valor pago no livro: "));

        array_push($livros, $livro);

    } else if ($option == 2) {

        //Listar
        foreach($livros as $l){
            echo $l;
        }
        
    } else if ($option == 3) {
        
        //Buscar Livro
        $position = readline("Informe o número da posição do livro na lista: ");
        $position--;

        if ($position >= 0 && $position < count($livros)){
            echo $livros[$position];        
        } else {
            echo "Não existe nenhum livro nessa posição. Por favor, informe uma posição válida. ";
        }

    } else if ($option == 4) {
        
        //Total Gasto
        $total = 0;

        foreach($livros as $l){
            $total += $l->getValorPago;
        }

        echo "Total gasto: " . $total . " reais.";

    } else if ($option == 0) {

        //Sair
        echo "Programa finalizado. \n";

    } else {
        echo "Opção inválida!\n";
    }

} while ($option != 0);