<?php

class ClientController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $peliculas = Peliculas::find();
        $this->view->peliculas = $peliculas;

        $categorias = Categorias::find();
        $this->view->categorias = $categorias;
    }

}

