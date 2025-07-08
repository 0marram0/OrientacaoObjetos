<?php 

class Livro {
    
    private $titulo;
    private $autor;
    private $genero;
    private $numPaginas;

    public function getDados() {
        $dados = sprintf("Título: %s | Autor: %s | Gênero: %s | Núm. Páginas: %d \n", $this->titulo, $this->autor, $this->genero, $this->numPaginas);
        return $dados;
    }

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


    public function getNumPaginas()
    {
        return $this->numPaginas;
    }


    public function setNumPaginas($numPaginas): self
    {
        $this->numPaginas = $numPaginas;

        return $this;
    } 
} //Fim Classe Livro

//Programa

$livro1 = new Livro();
$livro1->setTitulo(readline("Informe o título do livro 1: "));
$livro1->setAutor(readline("Informe o autor do livro 1: "));
$livro1->setGenero(readline("Informe o genêro do livro 1: "));
$livro1->setNumPaginas(readline("Informe o número de páginas do livro 1: "));

$livro2 = new Livro();
$livro2->setTitulo(readline("Informe o título do livro 2: "));
$livro2->setAutor(readline("Informe o autor do livro 2: "));
$livro2->setGenero(readline("Informe o genêro do livro 2: "));
$livro2->setNumPaginas(readline("Informe o número de páginas do livro 2: "));

$livro3= new Livro();
$livro3->setTitulo(readline("Informe o título do livro 3: "));
$livro3->setAutor(readline("Informe o autor do livro 3: "));
$livro3->setGenero(readline("Informe o genêro do livro 3: "));
$livro3->setNumPaginas(readline("Informe o número de páginas do livro 3: "));

//Identifcar qual livro possuí mais páginas
$livroMaisPaginas = null;

if($livro1->getNumPaginas() > $livro2->getNumPaginas() &&
   $livro1->getNumPaginas() > $livro3->getNumPaginas()){
    $livroMaisPaginas = $livro1;
} elseif($livro2->getNumPaginas() > $livro3->getNumPaginas()) {
    $livroMaisPaginas = $livro2;
} else {
    $livroMaisPaginas = $livro3;
}

//Imprimir os dados do livro com mais páginas
echo $livroMaisPaginas->getDados();
