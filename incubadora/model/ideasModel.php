<?php
  /**
   *
   */
  class ideasModel
  {
    private $db;

    function __construct()
    {

      $this->db= $this->Connect();
    }

    function Connect(){
      return new PDO('mysql:host=localhost;'
    .'dbname=incubadora;charset=utf8'
    , 'root', '');
  }

    function getIdeas(){
      $ideas = $this->db->prepare( "select * from idea");
      $ideas->execute();
      return $ideas->fetchAll(PDO::FETCH_OBJ);

    }

    function getIdea($id){

    }


    function updateIdea($id){

    }

    function createIdea($name,$theme,$impact,$description){
      $sentence = $this->db->prepare("INSERT INTO idea(name, theme, impact, description) VALUES(?,?,?,?)");
      $sentence -> execute(array($name,$theme,$impact,$description));

    }

    function deleteIdea($id){
      $sentence = $this->db->prepare( "delete from idea where id_idea=?");
      $sentence->execute(array($id));

    }

  }




?>
