<?php

class Dias extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_dia;

    /**
     *
     * @var string
     */
    public $dia;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("cine");
        $this->setSource("dias");
        $this->hasMany('id_dia', 'Proyecciones', 'dia', ['alias' => 'Proyecciones']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dias';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dias[]|Dias|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dias|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
