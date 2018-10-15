<?php

class Products extends Phalcon\Mvc\Model
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $clasificacion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $active;

    public function initialize()
    {
        $this->belongsTo('clasificacion', 'ProductTypes', 'id');
    }

}
