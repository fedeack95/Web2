<?php
  require_once "view\ideasView.php";
  require_once "controller/ideasController.php"


  $controller = new ideasController();
  $arrayUrl = explode('/',$_GET['action']);


  if($arrayUrl[0]== ''){
    $controller->home();
  }else{
    if(){

    }
  }

 ?>
