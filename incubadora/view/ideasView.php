<?php
require('./libs/Smarty.class.php');


class IdeasView
{

  private $smarty

  function __construct()
  {


    $this->smarty= new Smarty();


  }

  function show($title, $ideas){

   $this->Smarty->assign('title',$title); // El 'Titulo' del assign puede ser cualquier valor
   $this->Smarty->assign('ideas',$ideas);
   //$smarty->debugging = true;
   $this->Smarty->display('templates/home.tpl');
 }

 function MostrarEditarTarea($title, $idea){

   $this->Smarty->assign('title',$title); // El 'Titulo' del assign puede ser cualquier valor
   $this->Smarty->assign('idea',$idea);
   $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

   //$smarty->debugging = true;
   $this->Smarty->display('templates/showEditIdea.tpl');
 }




}


 ?>
