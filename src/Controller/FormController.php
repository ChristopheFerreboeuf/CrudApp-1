<?php

namespace Controller;

use Entity\Product;
use Repository\ProductRepository;

class FormController
{
    public function getConnection()
    {
        $connection = new \mysqli('mysql', 'root', 'password', 'scandiweb');

        return $connection;
    }

    public function submit()
    {
        $id = $_REQUEST['id'];
        $sku = $_REQUEST['sku'];
        $name = $_REQUEST['name'];
        $price = $_REQUEST['price'];
        $type = $_REQUEST['type'];
        $size = $_REQUEST['size'];
        $weight = $_REQUEST['weight'];
        $length = $_REQUEST['length'];

        $product = new Product($id, $sku, $name, $price, $type, $size, $weight, $length);

        if (isset($_POST['submit'])) {
            $productType = $_POST['productType'];
            if ($productType == 'CD') {
                $product->setSku($_POST[$sku]);
                $product->setName($_POST[$name]);
                $product->setPrice($_POST[$price]);
                $product->setType($_POST[$type]);
                $product->setSize($_POST[$size]);
                $product->setWeight($_POST[$weight]);
                $product->setLength($_POST[$length]);
            } else if ($productType == 'Book') {
            } else if ($productType == 'Furniture') {
            } else {
                $message = 'There is no type for this product!';
            }
        }

        return $product;
    }
}