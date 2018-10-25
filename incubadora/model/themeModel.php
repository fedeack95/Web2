<?php

   class themeModel{
    private $modeldb;

    public function __construct(){
      $this->modeldb = $this->Connect();

    }


    public function Connect(){
      return new PDO('mysql:host=localhost;'
    .'dbname=incubadora;charset=utf8'
    , 'root', '');
  }

    public function getThemes(){

      $themes = $this->modeldb->prepare("select * from theme");
      $themes->execute();
      return $themes->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTheme($id){
      $theme = $this->modeldb->prepare("select * from theme where id_theme=?");
      $theme->execute(array($id));
      return $theme->fetch(PDO::FETCH_ASSOC);

    }

    public function deleteTheme($id){
      $sentence= $this->modeldb->prepare('delete from theme where id_theme=? ');
      $sentence->execute(array($id));

    }

    public function editTheme($id,$name){
      $sentence= $this->modeldb->prepare('update theme set name=? where id_theme=? ');
      $sentence->execute(array($name,$id));
    }

    public function createTheme($name){
      $sentence = $this->modeldb->prepare("INSERT INTO theme(name) VALUES(?)");
      $sentence ->execute(array($name));
    }
  }

 ?>
