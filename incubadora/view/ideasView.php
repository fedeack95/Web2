<?php
require('libs/Smarty.class.php');

class IdeasView
{

    private $smarty;

    function __construct()
    {
      $this->smarty= new Smarty();
    }

  function show($title,$ideas,$set){

   $this->smarty->assign('title',$title); // El 'Titulo' del assign puede ser cualquier valor
   $this->smarty->assign('ideas',$ideas);
   $this->smarty->assign('isSet',$set);
   //$this->smarty->debugging = true;
   $this->smarty->display('templates/home.tpl');
 }

 function MostrarEditarTarea($title, $idea){

   $this->smarty->assign('title',$title); // El 'Titulo' del assign puede ser cualquier valor
   $this->smarty->assign('idea',$idea);
   $this->smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

   //$smarty->debugging = true;
   $this->smarty->display('templates/showEditIdea.tpl');
 }

 function showNewIdea($title){
   $this->smarty->assign('title',$title);
   $this->smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
   $this->smarty->display('templates/newIdea.tpl');
 }

function showIdea($title,$idea,$like,$donnation,$comments,$bet){
  $this->smarty->assign('like',$like);
  $this->smarty->assign('title',$title);
  $this->smarty->assign('idea',$idea);
  $this->smarty->assign('donnation',$donnation);
  $this->smarty->assign('comments',$comments);
  $this->smarty->assign('bet',$bet);
  $this->smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  //$smarty->debugging = true;
  $this->smarty->display('templates/showIdea.tpl');
}




}


 ?>
