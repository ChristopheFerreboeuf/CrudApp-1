<?php

class ProductRepository
{
    public function getConnection()
    {
        /*$connection = new Database('mysql', 'root', 'password', 'scandiweb');*/

        $connection = new mysqli('mysql', 'root', 'password', 'scandiweb');

        return $connection;
    }

    public function getProducts()
    {
        $query = "SELECT * FROM product";
        $result = $this->getConnection()->query($query);

        $products = [];
        while ($row = $result->fetch_array()) {
            $products[] = new Product(
                $row['id'],
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
        $query = "SELECT id FROM product WHERE id = ?";
        $stmt = $this->getConnection()->query($query);

        // get one product corresponding to $id

        return $stmt;
    }

    public function delete($id, $row)
    {
        $query = "DELETE FROM product WHERE id = ?";
        $result = $this->getConnection()->query($query);

        var_dump($result);

        return $result;
    }
}
