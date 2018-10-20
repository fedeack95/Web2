  <?php
  require_once "./view/ideasView.php";
  require_once "./model/ideasModel.php";
  require_once "./model/likeModel.php";
  require_once "./model/donnationModel.php";
  require_once "./model/commentModel.php";
  require_once "./model/betModel.php";
  require_once "./controller/LoginController.php";
  class IdeasController
  {
    private $view;
    private $model;
    private $controllerLogin;
    private $modelLike;
    private $modelDonnation;
    private $commentModel;
    private $betModel;
    public function __construct()

    {
      //parent::__construct();
      $this->view = new ideasView();
      $this->model = new ideasModel();
      $this->modelLike = new likeModel();
      $this->modelDonnation  = new donnationModel();
      $this->commentModel = new commentModel();
      $this->betModel = new betModel();
      $this->controllerLogin = new LoginController();

    }
    public function newIdea()
    {
         $this->view->showNewIdea("New Idea");
    }


    public function saveNewIdea(){
        $name = $_POST["name"];
        $theme = $_POST["theme"];
        $impact = $_POST["impact"];
        $description = $_POST["description"];
        session_start();
        if(isset($_SESSION["User"])){
          $idUser = ($_SESSION["User"])[0]["id_user"];

          $this->model->createIdea($name,$theme,$idUser, $impact,$description);

        }else{
          $this->controllerLogin->Login();

        }






    }

    public function editIdea($param){
     $id_idea = $param[0];
     $idea = $this->model->GetIdea($id_idea);
     $this->view->MostrarEditarTarea("Edit Idea", $idea);
     $this->model->close();

    }
    public function safeEdit(){
       $id_idea = $_POST["idForm"];
       $name = $_POST["nameForm"];
       $theme = $_POST["themeForm"];
       $impact = $_POST["impactForm"];
       $description = $_POST["descriptionForm"];
       $this->model->safeEditIdea($name,$theme,$impact,$description,$id_idea);
       $this->view->home();

       $this->model->close();
    }

    public function showIdea($param){
      $id_idea= $param[0];
      $likes = $this->modelLike->getLike($id_idea);
      $idea = $this->model-> getIdea($id_idea);
      $donnation = $this->modelDonnation->getDonnation($id_idea);
      $comments = $this->commentModel->getComments($id_idea);
      $bet = $this->betModel->getBet($id_idea);
      $this->view->showIdea($idea["name"],$idea,$likes,$donnation,$comments,$bet);
      $this->model->close();
    }

    public function deleteIdea($param){
    $this->model->deleteIdea($param[0]);
     $this->view->home();
    $this->model->close();
    }

    public function getIdeaTheme($theme){
      $ideas = $this->model->getIdeas();

      $this->model->close();
    }

    public function home(){
      $ideas = $this->model->getIdeas();
      $this->view->show("HOME",$ideas);
      $this->model->close();
    }


  }




 ?>
