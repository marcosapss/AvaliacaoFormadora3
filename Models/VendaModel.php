<?php
class VendaModel {
    private $idVenda;
    private $dataVenda;
    private $formaPagto;
    private $cliente;
    private $itens;

    public function __construct($idVenda = "", $dataVenda = "", $formaPagto = "", $cliente = null, $itens = []) {
        $this->idVenda = $idVenda;
        $this->dataVenda = $dataVenda;
        $this->formaPagto = $formaPagto;
        $this->cliente = $cliente;
        $this->itens = $itens;
    }

    public function getIdVenda() { return $this->idVenda; }
    public function setIdVenda($id) { $this->idVenda = $id; }

    public function getDataVenda() { return $this->dataVenda; }
    public function setDataVenda($d) { $this->dataVenda = $d; }

    public function getFormaPagto() { return $this->formaPagto; }
    public function setFormaPagto($f) { $this->formaPagto = $f; }

    public function getCliente() { return $this->cliente; }
    public function setCliente($c) { $this->cliente = $c; }

    public function getItens() { return $this->itens; }
    public function setItens($it) { $this->itens = $it; }

    public function toArray() {
        return [
            'idVenda' => $this->idVenda,
            'dataVenda' => $this->dataVenda,
            'formaPagto' => $this->formaPagto,
            'cliente' => $this->cliente ? $this->cliente->toArray() : null,
            'itens' => array_map(function($i){ return $i->toArray(); }, $this->itens ?: [])
        ];
    }
}
?>
