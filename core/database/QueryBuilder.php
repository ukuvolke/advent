<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function insert ($table, $parameters) {

        $sql=sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(", ", array_keys($parameters)),
            ":" . implode(", :", array_keys($parameters)),
        );

        $statement= $this->pdo->prepare($sql);
        $statement->execute($parameters);
    }
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}