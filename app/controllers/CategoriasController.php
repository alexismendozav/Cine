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

    public function addAjaxAction()
    {
      if( $this->request->isAjax() )
      {
        $this->view->disable();
        $name = $this->request->getPost('name');
        $visible = $this->request->getPost('visible');
        $categoria = new Categorias();
        $categoria->categoria = $name;
        $categoria->visible = $visible;
        $id = $categoria->save();

        $this->response->setJsonContent(["data"=>$name,"id"=>$id]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
    }

    public function editAjaxAction()
    {
      if( $this->request->isAjax() )
      {
        $this->view->disable();
        $id = $this->request->getPost('id');
        $name = $this->request->getPost('name');
        $visible = $this->request->getPost('visible');
        $categoria =  Categorias::findFirst($id);
        $categoria->categoria = $name;
        $categoria->visible = $visible;
        $id = $categoria->save();

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
        $categoria = Categorias::findFirst($id);
        $categoria->delete();

        $this->response->setJsonContent(["data"=>$id,"id"=>$id]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
     }

}

