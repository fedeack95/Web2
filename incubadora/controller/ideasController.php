<?php
  require_once "./view/ideasView.php";
  require_once "./model/ideasModel.php";

  class IdeasController
  {
    private $view;
    private $model;

    function __construct()
    {
      $this->view = new ideasView();
      $this->model = new ideasModel();
    }

    function newIdea(){
      $newIdea= $this->model

    }

    function editTarea(){

    }

    function deleteTarea(){

    }

    function getRanking(){

    }

    function home(){
      $ideas = $this->model->getIdeas();
      $this->view->mostrarWeb($ideas);
    }


  }




 ?>
