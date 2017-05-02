<?php

class Connect {

    private $port = "5433";
    private $user = "postgres";
    private $pass = "123456";
    private $dbname = "Budega";
    private $host = "localhost";
    private $conn;

    public function __construct() {

        $this->conn = pg_connect("port=" . $this->port . " host=" . $this->host . " user=" . $this->user . " password=" . $this->pass . " dbname=" . $this->dbname);

        if (!$this->conn) {
            echo "<br/>ERRO NA CONEXÃO COM O BANCO DE DADOS.<br/>";
        }
    }
}

?>
