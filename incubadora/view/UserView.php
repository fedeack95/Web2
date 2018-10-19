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
<<<<<<< HEAD
    $this->smarty->debugging = true;
=======
    //$this->smarty->assign('ideas',"Un idea");
    //  $this->smarty->debugging = true;
>>>>>>> d78be793987e8db5c5401df017dfe2a60653fdc2
    $this->smarty->display('templates/userForm.tpl');
  }

  public function showUsers($Title, $Users){
      $this->smarty->assign('title',$Title); // El 'Titulo' del assign puede ser cualquier valor
      $this->smarty->assign('users',$Users);
      $this->smarty->display('templates/showUsers.tpl');
    }


}




 ?>
