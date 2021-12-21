<?php

class Product
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $price;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $size;

    public function __construct($id, $sku, $name, $price, $type, $size)
    {
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->size = $size;
    }

    public function getConnection()
    {
        $connection = new mysqli('mysql', 'root', 'password', 'scandiweb');

        return $connection;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
}
