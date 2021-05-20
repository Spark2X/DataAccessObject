<?php

class Sql extends PDO {

private $conn;

public function __construct(){ //quando um objeto instanciar a classe, ele se auto executa sem precisar declarar no objeto

    $this->conn = new PDO("sqlsrv:Server=XXX.XXX.XX.X;Database=db_name;ConnectionPooling=0"); <-preencher

    $this->conn->exec("set names utf8");
}


private function setParams($statement, $parameters = array()){

    foreach ($parameters as $key => $value) {
        
        $this->setParam($statement, $key, $value);

    }

}

private function setParam($statement, $key, $value){

    $statement->bindParam($key, $value);

}

public function query($rawQuery, $params = array()){

    $stmt = $this->conn->prepare($rawQuery);

    $this->setParams($stmt, $params);

    $stmt->execute();

    return $stmt;

}

public function select($rawQuery, $params = array()):array { //pega o comando do sql bruto e faz o fetch(ligação) dos parametros em formato de array pra facilitar a mudança, feito para evitar SQL Inject

    $stmt = $this->query($rawQuery, $params);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

}

?>