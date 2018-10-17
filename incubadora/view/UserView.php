<?php
/**
 *
 */
class UserView
{

  private $smarty;

  function __construct()
  {


    $this->smarty= new Smarty();


  }

  function showForm($title){
    $this->smarty->assign('title',$title); // El 'Titulo' del assign puede ser cualquier valor
    //$this->smarty->assign('ideas',"Un idea");
    $this->smarty->debugging = true;
    $this->smarty->display('templates/userForm.tpl');
  }

}




 ?>
