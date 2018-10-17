<?php
class LoginView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }


  function mostrarLogin($message = ''){

    $this->Smarty->assign('Titulo',"Login");
    $this->Smarty->assign('Message',$message); //to diplay messages to the user when something goes wrong

    $this->Smarty->display('templates/login.tpl');
  }
}

 ?>
