<?php


class Peliculas extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_pelicula;

    /**
     *
     * @var string
     */
    public $nombre_pelicula;

    /**
     *
     * @var string
     */
    public $imagen;

    /**
     *
     * @var string
     */
    public $triler;

    /**
     *
     * @var string
     */
    public $duracion;

    /**
     *
     * @var integer
     */
    public $clasificacion;

    /**
     *
     * @var integer
     */
    public $categoria;

    /**
     *
     * @var string
     */
    public $idioma;

    /**
     *
     * @var string
     */
    public $prioridad;

    /**
     *
     * @var double
     */
    public $calificacion;

    /**
     *
     * @var string
     */
    public $fecha;

    /**
     *
     * @var string
     */
    public $descripcion;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("cine");
        $this->setSource("peliculas");
        $this->hasMany('id_pelicula', 'Proyecciones', 'pelicula', ['alias' => 'Proyecciones']);
        $this->belongsTo('categoria', 'Categorias', 'id_categoria', ['alias' => 'Categorias']);
        $this->belongsTo('clasificacion', 'Clasificaciones', 'id_clasificacion', ['alias' => 'Clasificaciones']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'peliculas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Peliculas[]|Peliculas|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Peliculas|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
