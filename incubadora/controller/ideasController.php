  <?php
  require_once "./view/ideasView.php";
  require_once "./model/ideasModel.php";

  class IdeasController
  {
    private $view;
    private $model;

    function __construct()
    {
      $this->view = new ideasView();
      $this->model = new ideasModel();
    }
    public function newIdea()
    {
         $this->view->showNewIdea("New Idea");
    }


    public function saveNewIdea(){


      if(isset($_POST["nameForm"])){
        $name = $_POST["nameForm"];
      }

      if(isset($_POST["themeForm"])){
        $theme = $_POST["themeForm"];
      }

      if(isset($_POST["impactForm"])){
        $impact = $_POST["impactForm"];
      }

      if(isset($_POST["descriptionForm"])){
        $description = $_POST["descriptionForm"];
      }

      $this->model->createIdea($name,$theme,$impact,$description);

      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));


    }

    public function editIdea($param){
     $id_idea = $param[0];
     $idea = $this->model->GetIdea($id_idea);
     $this->view->MostrarEditarTarea("Edit Idea", $idea);


    }
    public function safeEdit(){
       $id_idea = $_POST["idForm"];
       $name = $_POST["nameForm"];
       $theme = $_POST["themeForm"];
       $impact = $_POST["impactForm"];
       $description = $_POST["descriptionForm"];

    $this->model->safeEditIdea($name,$theme,$impact,$description,$id_idea);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    }


    public function deleteIdea($param){
    $this->model->deleteIdea($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    }

    public function getRanking(){

    }

    public function home(){
      $ideas = $this->model->getIdeas();
      $this->view->show("prueba",$ideas);
    }


  }




 ?>
