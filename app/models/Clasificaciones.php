<?php


class Clasificaciones extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_clasificacion;

    /**
     *
     * @var string
     */
    public $clasificacion;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("cine");
        $this->setSource("clasificaciones");
        $this->hasMany('id_clasificacion', 'Peliculas', 'clasificacion', ['alias' => 'Peliculas']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'clasificaciones';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Clasificaciones[]|Clasificaciones|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Clasificaciones|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
