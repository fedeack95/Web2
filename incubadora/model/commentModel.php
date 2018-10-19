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
    $comments = $this->db->prepare( "select text from comment where
    id_idea =?");
    $comments->execute(array($id));
    return $comments->fetchAll(PDO::FETCH_ASSOC);
  }
  public function getCountComments($id){
    $comments = $this->db->prepare( "select count(text) from comment where
    id_idea =?");
    $comments->execute(array($id));
    return $comments->fetch(PDO::FETCH_ASSOC);

}

}
?>
