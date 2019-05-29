<?php

class CategoriasController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    
    public function datatableAction()
    {
      if( $this->request->isAjax() )
      {
        $this->view->disable();
        $categoria = Categorias::find();
        //Mandar los datos a la vista
        $this->response->setJsonContent(["data"=>$categoria]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }

    }

}

