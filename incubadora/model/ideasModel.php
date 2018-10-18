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

    public function getIdeas(){
      $ideas = $this->db->prepare( "select * from idea");
      $ideas->execute();
      return $ideas->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getIdea($id){
      $ideas = $this->db->prepare( "select * from idea where id_idea=?");
      $ideas->execute(array($id));
      return $ideas->fetch(PDO::FETCH_ASSOC);
    }


    public function updateIdea($id){

    }

    public function createIdea($name,$theme,$impact,$description){
      $sentence = $this->db->prepare("INSERT INTO idea(name, theme, impact, description) VALUES(?,?,?,?)");
      $sentence->execute(array($name, $theme, $impact, $description));
      
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
