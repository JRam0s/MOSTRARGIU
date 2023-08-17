<?php

namespace app\traits;

trait monitor
{
    public function monitor($returnAll = true)
    {
        try {
            $query = $this->connection->query("SELECT turma COUNT(nome) AS quantidade FROM students GROUP BY turma{$this->table} ");
            return $returnAll ? $query->fetchAll() : $query->fetch();
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}
