<?php
require_once "./view/rankingView.php";
require_once "./model/ideasModel.php";
require_once "./model/UserModel.php";
require_once "./model/likeModel.php";
require_once "./model/donnationModel.php";
require_once "./model/commentModel.php";
require_once "./model/betModel.php";
require_once "./model/UserModel.php";


class rankingController
{

  private $view;
  private $model;
  private $modelLike;
  private $modelDonnation;
  private $commentModel;
  private $betModel;
  private $userModel;
  private $ranking;
  public function __construct(){

    //parent::__construct();
    $this->view = new rankingView();
    $this->model = new ideasModel();
    $this->modelLike = new likeModel();
    $this->modelDonnation  = new donnationModel();
    $this->commentModel = new commentModel();
    $this->betModel = new betModel();
    $this->userModel = new UserModel();
    $this->ranking = $this->generarRanking();
  }
  public function getRanking(){
    $this->view->showRanking("ranking",$this->ranking);
  }
  private function generarRanking(){
    $ideas = $this->model->getIdeas();
    $ranking;
    $contador=0;
    foreach ($ideas as $idea ) {
      $ranking[$contador]= $this->getRankedIdea($idea['id_idea']);
      $contador++;
    }
    return $ranking;


  }
  private function getRankedIdea($id){
    $idUser = ($this->model->getIdea($id))["id_user"];
    
    $row = [
      'name' =>  ($this->model->getIdeaName($id))["name"],
      'creator' =>($this->userModel->getUser($idUser))[0]["name"],
      'theme' => ($this->model->getIdeaTheme($id))["theme"],
      'likes' => ($this->modelLike->getLike($id))["count(quantity)"],
      'donattion' => ($this->modelDonnation->getDonnation($id))["sum(quantity)"],
      'comments' =>  ($this->commentModel->getCountComments($id))["count(text)"],
      'bet' => ($this->betModel->getBet($id))["sum(quantity)"],
    ];
    return $row;
  }




}









 ?>
