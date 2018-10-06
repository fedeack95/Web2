<?php
require('libs/Smarty.class.php');

class IdeasView
{

  private $smarty;

  function __construct()
  {


    $this->smarty= new Smarty();


  }

  function show($title, $ideas){

   $this->smarty->assign('title',$title); // El 'Titulo' del assign puede ser cualquier valor
   $this->smarty->assign('ideas',$ideas);
   //$smarty->debugging = true;
   $this->smarty->display('templates/home.tpl');
 }

 function MostrarEditarTarea($title, $idea){

   $this->smarty->assign('title',$title); // El 'Titulo' del assign puede ser cualquier valor
   $this->smarty->assign('idea',$idea);
   $this->smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

   //$smarty->debugging = true;
   $this->smarty->display('templates/showEditIdea.tpl');
 }




}


 ?>
