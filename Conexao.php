<?php

class Conexao{
    private static $instancia;
    
    private function __construct(){}
    
    public static function getConexao()
    {
        if (!isset(self::$instancia))
        {
            $dbname = 'bd_distribuidora';
            $host = 'localhost';
            $user = 'root';
            $senha = '';
            try {
                self::$instancia = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $senha);
            } catch (Exception $e) {
                echo 'O erro é: ' . $e;
            }
        }
        return self::$instancia;
    }
}


?>