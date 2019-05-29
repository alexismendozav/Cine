<?php

class CarteleraController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $peliculas = Peliculas::find();
        $this->view->peliculas = $peliculas;

        $clasificaciones= Clasificaciones::find();
        $this->view->clasificaciones = $clasificaciones;

        $proyecciones= Proyecciones::find();
        $this->view->proyecciones = $proyecciones;

        $categorias= Categorias::find();
        $this->view->categorias = $categorias;

        
        
    }

}

