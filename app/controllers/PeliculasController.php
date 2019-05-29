<?php

class PeliculasController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        
    }
    public function datatableAction()
    {
      if( $this->request->isAjax() )
      {
        $this->view->disable();
        $pelicula = Peliculas::find();
        //Mandar los datos a la vista
        $this->response->setJsonContent(["data"=>$pelicula]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }

    }

}

