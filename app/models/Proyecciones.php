<?php


class Proyecciones extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_proyeccion;

    /**
     *
     * @var integer
     */
    public $pelicula;

    /**
     *
     * @var integer
     */
    public $sala;

    /**
     *
     * @var string
     */
    public $dia;

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
        $this->setSchema("cine2");
        $this->setSource("proyecciones");
        $this->belongsTo('pelicula', 'Peliculas', 'id_pelicula', ['alias' => 'Peliculas']);
        $this->belongsTo('sala', 'Salas', 'id_sala', ['alias' => 'Salas']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'proyecciones';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Proyecciones[]|Proyecciones|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Proyecciones|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
