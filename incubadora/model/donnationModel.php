<?php
  /**
   *
   */
  class donnationModel
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


  public function getDonnation($id){
    $likes = $this->db->prepare( "select sum(quantity)  from donnation where
    id_idea =?");
    $likes->execute(array($id));
    return $likes->fetch(PDO::FETCH_ASSOC);
  }

}


?>
