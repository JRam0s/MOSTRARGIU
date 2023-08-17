<?php

namespace app\traits;

trait Create
{
    public function create(array $fieldsAndValues)
    {
        try {
            $sql = "INSERT INTO " . $this->table . "(nome, turma)";
            $sql = $sql . "VALUES('" . $fieldsAndValues['nome'] . "', '";
            $sql = $sql . $fieldsAndValues['turma'] . "')";
            return $this->connection->query($sql);
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}
