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

    public function insertUser($name, $lastName, $email, $about, $userId, $pass){
      //preparar la sentecia SQL con PDO seguro (los ?)
        $sentencia = $this->db_connection->prepare(
            "INSERT INTO user(name, lastName, email, about, userId, password) VALUES(?,?,?,?,?,?)");
        //pasar los parametros y ejecutar en la BBDD
        $sentencia->execute(array($name, $lastName, $email, $about, $userId, $pass));

    }

    public function getUsers(){

          $sentencia = $this->db_connection->prepare( "select * from user");
          $sentencia->execute();
          return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUser($user){

        $sentencia = $this->db_connection->prepare( "select * from user where id_user=? limit 1");
        $sentencia->execute(array($user));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteUser($idUser){
      $sentence = $this->db_connection->prepare( "delete from user where id_user=?");
      $sentence->execute(array($idUser));
    }


  }



 ?>
