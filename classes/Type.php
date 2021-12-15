<?php

class Type extends Product
{
    /**
     * @var int
     */
    private $type;

    /**
     * @param string $name
     * @param int $type
     */
    public function __construct($name, $type = 1)
    {
        parent::__construct($name);
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
