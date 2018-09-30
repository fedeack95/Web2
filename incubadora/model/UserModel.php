<?php
/**
 *
 */
class UserModel
{

    private $db_connection;

    function __construct()
    {
        $this->db_connection = new PDO('mysql:host=localhost;'
        .'dbname=incubadora;charset=utf8'
        , 'root', '');
    }

    public function getUser($username) {
        $sentencia = $this->db_connection->prepare( "select * from usuario "
                ." WHERE username = ?");
        $sentencia->execute(array($username));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function insertUser($name, $lastName, $email, $about, $image){
      //preparar la sentecia SQL con PDO seguro (los ?)
        $sentencia = $this->db_connection->prepare(
            "INSERT INTO user(name, lastName, email, about, avatar) VALUES(?,?)");
        //pasar los parametros y ejecutar en la BBDD
        $sentencia->execute(array($name, $lastName, $email, $about, $image));

    }

  }
}


 ?>
