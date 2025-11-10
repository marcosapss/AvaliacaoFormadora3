<?php
require_once 'ClienteModel.php';
class ClienteFisicoModel extends ClienteModel {
    private $nome;
    private $cpf;

    public function __construct($idCliente = "", $endereco = "", $param3 = "", $param4 = "", $param5 = "") {
        // aceitar duas formas de construtor:
        // (id, endereco, nome, cpf)  -> usado por DAO
        // (id, endereco, credito, nome, cpf) -> usado por Controller
        $credito = 0;
        $nome = '';
        $cpf = '';
        if ($param5 !== "") {
            $credito = $param3;
            $nome = $param4;
            $cpf = $param5;
        } else {
            $nome = $param3;
            $cpf = $param4;
        }

        parent::__construct($idCliente, $endereco, $credito, 'Físico');
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() { return $this->nome; }
    public function setNome($n) { $this->nome = $n; }

    public function getCpf() { return $this->cpf; }
    public function setCpf($c) { $this->cpf = $c; }

    public function toArray() {
        $base = parent::toArray();
        $base['nome'] = $this->nome;
        $base['cpf'] = $this->cpf;
        return $base;
    }
}
?>
