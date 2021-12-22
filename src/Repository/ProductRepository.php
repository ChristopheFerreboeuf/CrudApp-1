<?php

namespace Repository;

use Entity\Product;

class ProductRepository
{
    public function getConnection()
    {
        /*$connection = new Database('mysql', 'root', 'password', 'scandiweb');*/

        $connection = new \mysqli('mysql', 'root', 'password', 'scandiweb');

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
                $row['size'],
                $row['weight'],
                $row['length']
            );
        }

        return $products;
    }

    public function getProduct($id)
    {
        $query = "SELECT id FROM product WHERE id = ?";
        $result = $this->getConnection()->query($query);

        $product[] = new Product(
            $result['id'],
            $result['sku'],
            $result['name'],
            $result['price'],
            $result['type_id'],
            $result['size'],
            $result['weight'],
            $result['length']
        );

        return $product;
    }

    public function deleteProduct($id, $row)
    {
        $query = "DELETE FROM product WHERE id = ?";
        $result = $this->getConnection()->query($query);

        var_dump($result);

        return $result;
    }
}
