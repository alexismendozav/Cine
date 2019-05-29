<?php

class SalasController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    public function datatableAction()
    {
      if( $this->request->isAjax() )
      {
        $this->view->disable();
        $salas = Salas::find();
        //Mandar los datos a la vista
        $this->response->setJsonContent(["data"=>$salas]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
    }

}

