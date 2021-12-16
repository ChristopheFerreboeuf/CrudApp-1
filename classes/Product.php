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

    /**
     * @param string $sku
     * @param string $name
     * @param int $price
     * @param string $type
     * @param int $size
     */
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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }
}
