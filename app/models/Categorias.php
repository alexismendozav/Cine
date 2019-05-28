<?php


class Categorias extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_categoria;

    /**
     *
     * @var string
     */
    public $categoria;

    /**
     *
     * @var string
     */
    public $visible;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("cine2");
        $this->setSource("categorias");
        $this->hasMany('id_categoria', 'Peliculas', 'categoria', ['alias' => 'Peliculas']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'categorias';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Categorias[]|Categorias|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Categorias|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
