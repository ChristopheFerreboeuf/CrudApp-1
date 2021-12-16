<?php

class Type extends Product
{
    private $id;

    /**
     * @var int
     */
    private $type;

    /**
     * @param string $name
     * @param int $type
     */
    public function __construct($id, $name, $type = 1)
    {
        parent::__construct($id, $name);
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
