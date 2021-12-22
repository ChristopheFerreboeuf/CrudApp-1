<?php

class FormController
{
    public function getConnection()
    {
        $connection = new mysqli('mysql', 'root', 'password', 'scandiweb');

        return $connection;
    }

    private $errors = array();

    public function post($POST)
    {
        $query = "insert into product (sku,name,type_id,price,size,weight,length ) values (:sku,:name,:type_id,:price,:size,:weight,length)";
        $DB = $this->getConnection($query);

        $data = [];
        $data['sku'] = $POST['sku'];
        $data['name'] = $POST['name'];
        $data['type_id'] = $POST['type_id'];
        $data['price'] = $POST['price'];
        $data['size'] = $POST['size'];
        $data['weight'] = $POST['weight'];
        $data['length'] = $POST['length'];
        /*$data['date'] = date("Y-m-d H:i:s");*/

        $result = $DB->write($query,$data);
        if(!$result){
            $this->errors[] = "Your data could not be saved";
        }

        return $this->errors;
    }
}