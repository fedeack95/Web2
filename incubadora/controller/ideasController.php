<?php
  require_once "./view/ideasView.php";
  require_once "./model/ideasModel.php";

  class ClassName extends AnotherClass
  {
    private $view;
    private $model;

    function __construct(argument)
    {
      $this->view = new ideasView();
      $this->model = new ideasModel();
    }

    function crear()
    {


    }

    function home (){
      $ideas = $this->model->getIdeas();
    }

  }




 ?>
