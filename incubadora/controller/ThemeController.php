<?php
   require_once "./model/themeModel.php";
   require_once "./view/themeView.php";
   require_once 'SecuredController.php';

  class themeController extends SecuredController  {
    private $model;
    private $view;

    public function __construct()  {
      parent::__construct();
      $this->model = new themeModel();

      $this->view = new themeView();

    }

    public function getThemes(){
      $themes = $this->model->getThemes();
      //var_dump($themes);
      $this->view->showThemes('THEMES',$themes);
    }

    public function getTheme($params){
      $id=$paramas[0];
      $theme=$this->model->getTheme($id);
      $this->view->showThemes('THEMES',$theme);
    }

    public function deleteTheme($params){
      $id=$params[0];
      $this->model->deleteTheme($id);
      $this->getThemes();
    }

    public function editTheme($params){
      $id_theme = $params[0];
      $theme = $this->model->getTheme($id_theme);
      $this->view->showEditTheme("Edit Theme", $theme);
    }

    function saveEditTheme(){
      $id=$_POST["idForm"];
      var_dump($_POST["newName"]);
      $newName= $_POST["newName"];
      $this->model->editTheme($id,$newName);
      $this->getThemes();
    }

    function createTheme(){
      $name = $_POST["newTheme"];
      $this->model->createTheme($name);
      $this->getThemes();
    }
  }





 ?>
