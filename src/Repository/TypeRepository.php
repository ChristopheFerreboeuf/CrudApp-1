<?php

namespace Repository;

use Entity\Type;

class TypeRepository
{
    public function getConnection()
    {
        $connection = new mysqli('mysql', 'root', 'password', 'scandiweb');

        return $connection;
    }

    public function getTypes()
    {
        $stmt = $this->getConnection()->query('SELECT * FROM type');

        $types = [];

        while ($row = $stmt->fetch_array()) {
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