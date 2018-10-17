<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'ideasController#home',
      'home'=> 'ideasController#home',
      'delete'=> 'ideasController#deleteIdea',
      'edit'=> 'ideasController#editIdea',
      'ideaForm' => 'ideasController#newIdea',
      'safeEdit'=> 'ideasController#safeEdit',
      'mostrarUsuarios'=> 'UsuarioController#MostrarUsuario',
      'createUser' => 'UserController#userForm',
      'saveUser' => 'UserController#createUser',
      'login'=> 'LoginController#login',
      'logout'=> 'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin'
    ];

}

 ?>
