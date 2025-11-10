<?php
require_once 'ClienteModel.php';
class ClienteJuridicoModel extends ClienteModel {
    private $razaoSocial;
    private $cnpj;

    public function __construct($idCliente = "", $endereco = "", $param3 = "", $param4 = "", $param5 = "") {
        // aceitar duas formas:
        // (id, endereco, razao, cnpj)
        // (id, endereco, credito, razao, cnpj)
        $credito = 0;
        $razao = '';
        $cnpj = '';
        if ($param5 !== "") {
            $credito = $param3;
            $razao = $param4;
            $cnpj = $param5;
        } else {
            $razao = $param3;
            $cnpj = $param4;
        }

        parent::__construct($idCliente, $endereco, $credito, 'Jurídico');
        $this->razaoSocial = $razao;
        $this->cnpj = $cnpj;
    }

    public function getRazaoSocial() { return $this->razaoSocial; }
    public function setRazaoSocial($r) { $this->razaoSocial = $r; }

    public function getCnpj() { return $this->cnpj; }
    public function setCnpj($c) { $this->cnpj = $c; }

    public function toArray() {
        $base = parent::toArray();
        $base['razaoSocial'] = $this->razaoSocial;
        $base['cnpj'] = $this->cnpj;
        return $base;
    }
}
?>
