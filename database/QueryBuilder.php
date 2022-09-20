<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $class)
    {
        $query = $this->pdo->prepare("select * from {$table}");

        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS, $class);
    }
}
