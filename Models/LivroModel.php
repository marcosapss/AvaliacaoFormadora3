<?php
class LivroModel {
    private $idLivro;
    private $isbn;
    private $titulo;
    private $anoPublicacao;
    private $qtdeEstoque;
    private $valor;
    private $editora;

    public function __construct($idLivro = "", $isbn = "", $titulo = "", $anoPublicacao = "", $qtdeEstoque = "", $valor = "", $editora = null) {
        $this->idLivro = $idLivro;
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->anoPublicacao = $anoPublicacao;
        $this->qtdeEstoque = $qtdeEstoque;
        $this->valor = $valor;
        $this->editora = $editora;
    }

    public function getIdLivro() { return $this->idLivro; }
    public function setIdLivro($id) { $this->idLivro = $id; }

    public function getIsbn() { return $this->isbn; }
    public function setIsbn($isbn) { $this->isbn = $isbn; }

    public function getTitulo() { return $this->titulo; }
    public function setTitulo($t) { $this->titulo = $t; }

    public function getAnoPublicacao() { return $this->anoPublicacao; }
    public function setAnoPublicacao($a) { $this->anoPublicacao = $a; }

    public function getQtdeEstoque() { return $this->qtdeEstoque; }
    public function setQtdeEstoque($q) { $this->qtdeEstoque = $q; }

    public function getValor() { return $this->valor; }
    public function setValor($v) { $this->valor = $v; }

    public function getEditora() { return $this->editora; }
    public function setEditora($e) { $this->editora = $e; }

    public function toArray() {
        return [
            'idLivro' => $this->idLivro,
            'isbn' => $this->isbn,
            'titulo' => $this->titulo,
            'anoPublicacao' => $this->anoPublicacao,
            'qtdeEstoque' => $this->qtdeEstoque,
            'valor' => $this->valor,
            'editora' => $this->editora ? $this->editora->toArray() : null
        ];
    }
}
?>
