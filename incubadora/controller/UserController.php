<?php
  require_once "Controller.php";
  require_once "./view/UserView.php";
  require_once "./model/UserModel.php";
  require_once 'SecuredController.php';

  class UserController extends SecuredController{

    protected $view;
    protected $model;

    public function __construct() {
        parent::__construct();
        $this->view = new UserView();
        $this->model = new UserModel();
    }

    public function userForm(){
      $this->view->showForm("Create User");
    }

    public function createUser(){

    if(isset($_POST["name"])){
        $userName = $_POST["name"];
       }
    if(isset($_POST["lastName"])){
        $lastName = $_POST["lastName"];
       }
     if(isset($_POST["email"])){
        $email = $_POST["email"];
       }
     if(isset($_POST["userAbout"])){
        $userAbout = $_POST["userAbout"];
       }
       if(isset($_POST["avatar"])){
         $avatar = $_POST["avatar"];
       }
       if(isset($_POST["userId"])){
         $userId = $_POST["userId"];
       }
       if(isset($_POST["password"])){
         $pass = $_POST["password"];
       }
      //$model->insertUser($userName, $lastName, $email, $userAbout);
      $this->model->insertUser($userName, $lastName, $email, $userAbout, $userId, $pass);
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    }


  }


 ?>
