<?php

class AdminController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {  
        $clasificaciones= Clasificaciones::find();
        $this->view->clasificaciones = $clasificaciones;

        $categorias= Categorias::find();
        $this->view->categorias = $categorias;

    }

    public function addAjaxAction()
    {
      if( $this->request->isAjax() )
      {
        $this->view->disable();
        $nombre = $this->request->getPost('nombre');
        $imagen = $this->request->getPost('imagen');
        $triler = $this->request->getPost('triler');
        $duracion = $this->request->getPost('duracion');
        $clasificacion = $this->request->getPost('clasificacion');
        $categoria = $this->request->getPost('categoria');
        $idioma = $this->request->getPost('idioma');
        $prioridad = $this->request->getPost('prioridad');
        $calificacion = $this->request->getPost('calificacion');
        $fecha = $this->request->getPost('fecha');
        $descripcion = $this->request->getPost('descripcion');
       
        $pelicula = new Peliculas();
        $pelicula-> nombre_pelicula = $nombre;
        $pelicula-> imagen = $imagen;
        $pelicula-> triler = $triler;
        $pelicula-> duracion = $duracion;
        $pelicula-> clasificacion = $clasificacion;
        $pelicula-> categoria = $categoria;
        $pelicula-> idioma = $idioma;
        $pelicula-> prioridad = $prioridad;
        $pelicula-> calificacion = $calificacion;
        $pelicula-> fecha = $fecha;
        $pelicula-> descripcion = $descripcion;

        $id = $pelicula->save();

        $this->response->setJsonContent(["data"=>$nombre,"id"=>$id]);
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
        $nombre = $this->request->getPost('nombre');
        $imagen = $this->request->getPost('imagen');
        $triler = $this->request->getPost('triler');
        $duracion = $this->request->getPost('duracion');
        $clasificacion = $this->request->getPost('clasificacion');
        $categoria = $this->request->getPost('categoria');
        $idioma = $this->request->getPost('idioma');
        $prioridad = $this->request->getPost('prioridad');
        $calificacion = $this->request->getPost('calificacion');
        $fecha = $this->request->getPost('fecha');
        $descripcion = $this->request->getPost('descripcion');
       
        $pelicula =  Peliculas::findFirst($id);
        $pelicula-> nombre_pelicula = $nombre;
        $pelicula-> imagen = $imagen;
        $pelicula-> triler = $triler;
        $pelicula-> duracion = $duracion;
        $pelicula-> clasificacion = $clasificacion;
        $pelicula-> categoria = $categoria;
        $pelicula-> idioma = $idioma;
        $pelicula-> prioridad = $prioridad;
        $pelicula-> calificacion = $calificacion;
        $pelicula-> fecha = $fecha;
        $pelicula-> descripcion = $descripcion;
        $id = $pelicula->save();

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
        $pelicula = Peliculas::findFirst($id);
        $pelicula->delete();

        $this->response->setJsonContent(["data"=>$id,"id"=>$id]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
     }

}

