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

    public function create($table, $params)
    {
        $cols = implode(', ', array_keys($params));
        $placeholders = ':' . implode(', :', array_keys($params));

        $sql = "insert into {$table} ({$cols}) values ($placeholders)";

        try {
            $query = $this->pdo->prepare($sql);

            $query->execute($params);
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}
