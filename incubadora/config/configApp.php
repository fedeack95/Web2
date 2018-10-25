<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
define('RANKING','Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/ranking');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'ideasController#home',
      'home'=> 'ideasController#home',
      'delete'=> 'ideasController#deleteIdea',
      'edit'=> 'ideasController#editIdea',
      'view'=> 'ideasController#showIdea',
      'ideaForm' => 'ideasController#newIdea',
      'safeEdit'=> 'ideasController#safeEdit',
      'mostrarUsuarios'=> 'UsuarioController#MostrarUsuario',
      'saveIdea' => 'ideasController#saveNewIdea',
      'showUsers'=> 'UserController#showUsers',
      'createUser' => 'UserController#userForm',
      'saveUser' => 'UserController#createUser',
      'deleteUser' => 'UserController#deleteUser',
      'ranking' => 'rankingController#getRanking',
      'rankingTheme' => 'rankingController#generateRankingTheme',
      'login'=> 'LoginController#login',
      'logout'=> 'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin',
      'editThemeRanking' =>'rankingController#editRankingTheme',
      'safeEditThemeRanking'=>'rankingController#safeEditRankingTheme',
      'themes' => 'themeController#getThemes',
      'deleteTheme' => 'themeController#deleteTheme',
      'editTheme' => 'themeController#editTheme',
      'saveEditTheme' => 'themeController#saveEditTheme',
      'createTheme' => 'themeController#createTheme'
    ];

}

 ?>
