<?php


class Salas extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_sala;

    /**
     *
     * @var string
     */
    public $sala;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("cine2");
        $this->setSource("salas");
        $this->hasMany('id_sala', 'Proyecciones', 'sala', ['alias' => 'Proyecciones']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'salas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Salas[]|Salas|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Salas|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
