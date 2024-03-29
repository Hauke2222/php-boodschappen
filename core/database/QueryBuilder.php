<?php

namespace App\Core\Database;
use PDO;

class QueryBuilder {

    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

     public function selectAll($table) {
        //return $this->pdo->query("SELECT * FROM groceries");
        $statement = $this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
        
    } 
    public function insert($table, $parameters) {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {}
    }
}



?>