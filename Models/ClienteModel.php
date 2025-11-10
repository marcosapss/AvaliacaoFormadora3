<?php
class ClienteModel {
    private $idCliente;
    private $endereco;
    private $credito;
    private $tipoCliente;

    public function __construct($idCliente = "", $endereco = "", $credito = 0, $tipoCliente = "") {
        $this->idCliente = $idCliente;
        $this->endereco = $endereco;
        $this->credito = $credito;
        $this->tipoCliente = $tipoCliente;
    }

    public function getIdCliente() { return $this->idCliente; }
    public function setIdCliente($id) { $this->idCliente = $id; }

    public function getEndereco() { return $this->endereco; }
    public function setEndereco($e) { $this->endereco = $e; }

    public function getCredito() { return $this->credito; }
    public function setCredito($c) { $this->credito = $c; }

    public function getTipoCliente() { return $this->tipoCliente; }
    public function setTipoCliente($t) { $this->tipoCliente = $t; }

    public function toArray() {
        return [
            'idCliente' => $this->idCliente,
            'endereco' => $this->endereco,
            'credito' => $this->credito,
            'tipoCliente' => $this->tipoCliente
        ];
    }
}
?>
