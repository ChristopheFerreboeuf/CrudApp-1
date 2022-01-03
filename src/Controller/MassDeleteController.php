<?php

namespace Controller;

use Repository\ProductRepository;

class MassDeleteController
{
    public function getConnection()
    {
        $connection = new \mysqli('mysql', 'root', 'password', 'scandiweb');

        return $connection;
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