<?php

class ProyeccionesController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $peliculas = Peliculas::find();
        $this->view->peliculas = $peliculas;

        $salas = Salas::find();
        $this->view->salas = $salas;
    }

    public function datatableAction()
    {
      if( $this->request->isAjax() )
      {
        $this->view->disable();
        $proyeccion = Proyecciones::find();
        //Mandar los datos a la vista
        $this->response->setJsonContent(["data"=>$proyeccion]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
    }

    public function addAjaxAction()
    {
      if( $this->request->isAjax() )
      {
        $this->view->disable();
        $pelicula = $this->request->getPost('pelicula');
        $sala = $this->request->getPost('sala');
        $dia = $this->request->getPost('dia');
        $hora = $this->request->getPost('hora');
        
        $proyeccion = new Proyecciones();
        $proyeccion-> pelicula  = $pelicula;
        $proyeccion-> sala = $sala;
        $proyeccion-> dia = $dia;
        $proyeccion-> horario = $hora;
        $id = $proyeccion->save();

        $this->response->setJsonContent(["data"=>$name,"id"=>$id]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
    }
    public function updateAjaxAction()
    {
      if( $this->request->isAjax() )
      {
        $this->view->disable();
        $id = $this->request->getPost('id');
        $pelicula = $this->request->getPost('pelicula');
        $sala = $this->request->getPost('sala');
        $dia = $this->request->getPost('dia');
        $horario = $this->request->getPost('horario');
        $proyeccion =  Proyecciones::findFirst($id);
        $proyeccion-> pelicula = $pelicula;
        $proyeccion-> sala = $sala;
        $proyeccion-> dia = $dia;
        $proyeccion-> horario = $horario;
        $id = $proyeccion->save();

        $this->response->setJsonContent(["data"=>$name,"id"=>$id]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
    }

    public function deleteAjaxAction()
    {
      if( $this->request->isAjax() )
      {
        $this->view->disable();
        $id = $this->request->getPost('id');
        $proyeccion = Proyecciones::findFirst($id);
        $proyeccion->delete();

        $this->response->setJsonContent(["data"=>$id,"id"=>$id]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
    }

}

