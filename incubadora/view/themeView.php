<?php
  //require('libs/Smarty.class.php');

   class themeView{
    private $smarty;

    public function __construct(){
      $this->smarty = new Smarty();
    }


    public function showThemes($title,$themes){

      $this->smarty->assign('title',$title);
      $this->smarty->assign('themes',$themes);
      $this->smarty->display("templates/themes.tpl");
    }

    public function showEditTheme($title,$theme){
      $this->smarty->assign('title',$title);
      $this->smarty->assign('theme',$theme);
      $this->smarty->display("templates/editTheme.tpl");
    }
  }




 ?>
