<?php
class ItemVendaLivroModel {
    private $livro;
    private $venda;
    private $qtdeVendida;

    public function __construct($livro = null, $venda = null, $qtdeVendida = 0) {
        $this->livro = $livro;
        $this->venda = $venda;
        $this->qtdeVendida = $qtdeVendida;
    }

    public function getLivro() { return $this->livro; }
    public function setLivro($l) { $this->livro = $l; }

    public function getVenda() { return $this->venda; }
    public function setVenda($v) { $this->venda = $v; }

    public function getQtdeVendida() { return $this->qtdeVendida; }
    public function setQtdeVendida($q) { $this->qtdeVendida = $q; }

    public function toArray() {
        return [
            'livro' => $this->livro ? $this->livro->toArray() : null,
            'qtdeVendida' => $this->qtdeVendida
        ];
    }
}
?>
