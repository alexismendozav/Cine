<?php

class CarteleraController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $peliculas = Peliculas::find();
        $this->view->peliculas = $peliculas;

        $clasificaciones= Clasificaciones::find();
        $this->view->clasificaciones = $clasificaciones;

        
    }

}
