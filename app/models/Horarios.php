<?php


class Horarios extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_horario;

    /**
     *
     * @var string
     */
    public $horario;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("cine");
        $this->setSource("horarios");
        $this->hasMany('id_horario', 'Proyecciones', 'horario', ['alias' => 'Proyecciones']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'horarios';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Horarios[]|Horarios|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Horarios|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
