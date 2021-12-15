<?php

class TypeRepository
{
    public function getConnection()
    {
        $connection = new Database('mysql', 'root', 'password', 'scandiweb');

        return $connection->getInstance();
    }

    public function getTypes()
    {
        $stmt = $this->getConnection()->query('SELECT * FROM type');

        $types = [];

        while ($row = $stmt->fetchArray()) {
            $types[] = new Type(
                $row['id'],
                $row['name']
            );
        }

        return $types;
    }

    public function getType($id)
    {
        $stmt = $this->getConnection()->query('SELECT id FROM type WHERE id = ?');

        return $stmt;
    }
}