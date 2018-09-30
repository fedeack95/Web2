<?php
  require_once "view\ideasView.php";
  require_once "controller\ideasController.php";


  $controller = new ideasController();
  $arrayUrl = explode('/',$_GET['action']);

  switch ($arrayUrl[0]){
    case 'home' :
      $controller->home();
    break;
    case 'newIdea':


  }
 ?>
