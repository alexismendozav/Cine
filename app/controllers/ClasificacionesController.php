<?php

class ClasificacionesController extends \Phalcon\Mvc\Controller
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
    public function datatableAction()
    {
      if( $this->request->isAjax() )
      {
        $this->view->disable();
        $clasificacion = Clasificaciones::find();
        //Mandar los datos a la vista
        $this->response->setJsonContent(["data"=>$clasificacion]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }

    }

}

