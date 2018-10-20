<?php
  /**
   *
   */
  class ideasModel
  {
    private $db;

    public function __construct()
    {

      $this->db= $this->Connect();
    }

    public function Connect(){
      return new PDO('mysql:host=localhost;'
    .'dbname=incubadora;charset=utf8'
    , 'root', '');
  }
    public function close (){
      $this->db=null;
    }

    public function getIdeas(){
      $ideas = $this->db->prepare( "select * from idea");
      $ideas->execute();
      return $ideas->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getIdeasTheme($theme){
      $ideas = $this->db->prepare("select * from idea where theme=?");
      $ideas->execute(array($theme));
      return $ideas->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getIdea($id){
      $ideas = $this->db->prepare( "select * from idea where id_idea=?");
      $ideas->execute(array($id));
      return $ideas->fetch(PDO::FETCH_ASSOC);
    }
    public function getIdeaName($id){
      $ideaName = $this->db->prepare( "select name from idea where id_idea=?");
      $ideaName->execute(array($id));
      return $ideaName->fetch(PDO::FETCH_ASSOC);
    }
    public function getIdeaTheme($id){
      $ideaTheme = $this->db->prepare( "select theme from idea where id_idea=?");
      $ideaTheme->execute(array($id));
      return $ideaTheme->fetch(PDO::FETCH_ASSOC);
    }


    public function updateIdea($id){

    }

    public function createIdea($name,$theme,$idUser,$impact,$description){
      $sentence = $this->db->prepare("INSERT INTO idea(name, theme,id_user, impact, description) VALUES(?,?,?,?,?)");
      $sentence ->execute(array($name,$theme,$idUser,$impact,$description));

    }

    public function deleteIdea($id){
      $sentence = $this->db->prepare( "delete from idea where id_idea=?");
      $sentence->execute(array($id));

    }

    function safeEditIdea($name,$theme,$impact,$description,$id_idea){
      $sentence = $this->db->prepare( "update idea set name = ?, theme = ?, impact = ?, description = ? where id_idea=?");
      $sentence->execute(array($name,$theme,$impact,$description,$id_idea));
  }

}


?>
