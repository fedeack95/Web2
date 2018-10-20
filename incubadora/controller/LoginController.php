<?php

require_once  "./view/LoginView.php";
require_once  "./model/UserModel.php";


class LoginController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new UserModel();
    $this->Titulo = "Login";
  }

  function login(){

    $this->view->mostrarLogin($this->Titulo);

  }

  function logout(){
    session_start();
    session_destroy();
    header(LOGIN);
  }

  function verificarLogin(){
      $user = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->getUserByUserId($user);

      if(isset($dbUser)){
          //if (password_verify($pass, $dbUser[7]["password"])){
          if ($pass == $dbUser[0]["password"]){
              //mostrar lista de ideas
              session_start();
              $_SESSION["User"] = $dbUser;
              header(HOME);
          }else{
            $this->view->mostrarLogin($this->Titulo,"Contraseña incorrecta");
          }
      }else{
        //No existe el usario
        $this->view->mostrarLogin("No existe el usario");
      }

  }

}

 ?>
