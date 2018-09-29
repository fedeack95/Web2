<?php
  /**
   *
   */
  class ClassName extends AnotherClass
  {
    private $db;
    function __construct(argument)
    {

      $this->db= $this->Connect();
    }


    function getIdeas(){
      $ideas = $this->db->prepare( "select * from tarea");
      $ideas->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);

    }

  }




?>
