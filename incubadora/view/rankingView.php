<?php



  class rankingView
  {

    private $smarty;

    function __construct()
    {


      $this->smarty= new Smarty();


    }

    function showRanking($title, $ranking){

     $this->smarty->assign('title',$title); // El 'Titulo' del assign puede ser cualquier valor
     $this->smarty->assign('ranking',$ranking);
     $this->smarty->debugging = true;
     $this->smarty->display('templates/ranking.tpl');
   }

}
 ?>
