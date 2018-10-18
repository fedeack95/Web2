<?php
  /**
   *
   */
  class commentModel
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
  public function getComments($id){
    $comment = $this->db->prepare( "select text from comment where
    id_idea =?");
    $comment->execute(array($id));
    return $comment->fetch(PDO::FETCH_ASSOC);
  }

}


?>
