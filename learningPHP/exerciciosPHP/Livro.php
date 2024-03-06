<?php 

class Livro {
    private $titulo;
    private $quantidadePaginas;
    private $paginasLidas;

    public function __construct($tituloLivro, $quantidadePaginasLivro, $paginasLidasLivro) {
        $this->setTitulo($tituloLivro);
        $this->setQuantidadePaginas($quantidadePaginasLivro);
        $this->setPaginasLidas($paginasLidasLivro);
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($tituloLivro) {
        $this->titulo = $tituloLivro;
    }

    public function getQuantidadePaginas() {
        return $this->quantidadePaginas;
    }

    public function setQuantidadePaginas($quantidadePaginasLivro) {
        $this->quantidadePaginas = $quantidadePaginasLivro;
    }

    public function getPaginasLidas() {
        return $this->paginasLidas;
    }

    public function setPaginasLidas($paginasLidasLivro) {
        $this->paginasLidas = $paginasLidasLivro;
    }

    public function verificarProgresso() {
        if ($this->quantidadePaginas == 0) {
            return 0;
        }

        $progresso = ($this->paginasLidas / $this->quantidadePaginas) * 100;
        return $progresso;
    }
}

$livro1 = new Livro("O Senhor dos Anéis", 1000, 100);
$livro2 = new Livro("Harry Potter e a Pedra Filosofal", 300, 120);
$livro3 = new Livro("A culpa é das Estrelas", 200, 199);

echo "Progresso em '{$livro1->getTitulo()}' : {$livro1->verificarProgresso()}% </br>";
echo "Progresso em '{$livro2->getTitulo()}' : {$livro2->verificarProgresso()}% </br>";
echo "Progresso em '{$livro3->getTitulo()}' : {$livro3->verificarProgresso()}% </br>";

