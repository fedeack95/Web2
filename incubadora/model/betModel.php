<?php
  /**
   *
   */
  class betModel
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

  public function getBet($id){
    $bet = $this->db->prepare( "select sum(quantity) from bet where
    id_idea =?");
    $bet->execute(array($id));
    return $bet->fetch(PDO::FETCH_ASSOC);
  }

}


?>
