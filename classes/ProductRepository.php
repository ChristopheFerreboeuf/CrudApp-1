<?php

class ProductRepository
{
    public function getConnection()
    {
        $connection = new Database('mysql', 'root', 'password', 'scandiweb');

        return $connection->getInstance();
    }

    public function getProducts()
    {
        $query = "SELECT * FROM product";
        $stmt = $this->getConnection()->query($query);
        /*$stmt->execute();*/

        $products = [];
        while ($row = $stmt/*->fetchArray()*/) {
            $products[] = new Product(
                $row['sku'],
                $row['name'],
                $row['price'],
                $row['type_id'],
                $row['size']
            );
        }

        return $products;
    }

    public function getProduct($id)
    {
        $stmt = $this->getConnection()->query('SELECT id FROM product WHERE id = ?');

        // get one product corresponding to $id

        return $stmt;
    }
}
