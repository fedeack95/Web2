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
      $name = $_POST["nameForm"];
      $theme = $_POST["themeForm"];
      $impact = $_POST["impactForm"];
      $description = $_POST["descriptionForm"];


      $this->model->createTarea($name,$theme,$impact,$description);

      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));


    }

    function editIdea($idea){
     $id_idea = $idea[0];
     $idea = $this->model->GetIdea($id_idea);
     $this->view->ShowEditIdea("Editar idea", $idea);

    }

    function deleteIdea($param){
    $this->model->deleteIdea($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    }

    function getRanking(){

    }

    function home(){
      $ideas = $this->model->getIdeas();
      $this->view->show("prueba",$ideas);
    }


  }




 ?>
