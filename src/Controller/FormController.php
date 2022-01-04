<?php

namespace Controller;

use Entity\Product;
use Repository\ProductRepository;
use Repository\TypeRepository;

class FormController
{
    public function getConnection()
    {
        $connection = new \mysqli('mysql', 'root', 'password', 'scandiweb');

        return $connection;
    }

    public function submit()
    {
        $product = new Product(
            'id',
            'sku',
            'name',
            'price',
            'type',
            'size',
            'weight',
            'length'
        );

        if (isset($_POST['submit']) && isset($_POST['productType'])) {
            $typeRepository = new TypeRepository();
            $productType = $typeRepository->getTypes();
            if ($productType == 'CD') {
                $product->setSku($_POST['sku']);
                $product->setName($_POST['name']);
                $product->setPrice($_POST['price']);
                $product->setType($_POST['type']);
                $product->setSize($_POST['size']);
                $product->setWeight($_POST['weight']);
                $product->setLength($_POST['length']);
            } else if ($productType == 'Book') {
            } else if ($productType == 'Furniture') {
            } else {
                $message = 'There is no type for this product!';
            }
        }

        return $product;
    }

    public function delete()
    {
        if (isset($_POST['checkbox'])) {
            $repository = new ProductRepository();
            $query = $repository->deleteProduct();
            $result = $this->getConnection()->query($query);
        }

        return $result;
    }
}