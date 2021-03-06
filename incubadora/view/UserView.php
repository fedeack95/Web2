<?php
/**
 *
 */
class UserView
{

  private $smarty;

  public function __construct()
  {
    $this->smarty= new Smarty();
  }

  public function showForm($title){
    $this->smarty->assign('title',$title); // El 'Titulo' del assign puede ser cualquier valor
    //$this->smarty->debugging = true;
    $this->smarty->display('templates/userForm.tpl');
  }

  public function showUsers($Title, $Users){
      $this->smarty->assign('title',$Title); // El 'Titulo' del assign puede ser cualquier valor
      $this->smarty->assign('users',$Users);
      $this->smarty->display('templates/showUsers.tpl');
  }

  public function users(){
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/showUsers');
  }
}




 ?>
