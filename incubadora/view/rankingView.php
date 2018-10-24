<?php



  class rankingView
  {

    private $smarty;

    function __construct()
    {


      $this->smarty= new Smarty();


    }

    function showRanking($title, $ranking,$isSet){

     $this->smarty->assign('title',$title); // El 'Titulo' del assign puede ser cualquier valor
     $this->smarty->assign('ranking',$ranking);
     $this->smarty->assign('isSet',$isSet);
     $this->smarty->display('templates/ranking.tpl');
   }


   function showEditRanking($title,$ranking,$id_idea){
     $this->smarty->assign("title",$title);
     $this->smarty->assign('ranking',$ranking);
     $this->smarty->display('templates/rankingEdit.tpl');
   }


}
 ?>
