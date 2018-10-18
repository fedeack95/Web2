<?php
  /**
   *
   */
  class likeModel
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

  public function getLike($id){
    $likes = $this->db->prepare( "select count(quantity)  from idea_like where
    id_idea =?");
    $likes->execute(array($id));
    return $likes->fetch(PDO::FETCH_ASSOC);
  }
}


?>
