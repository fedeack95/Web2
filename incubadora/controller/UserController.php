<?php

  class UserController extends Controller{

    public function __construct() {
        parent::__construct();
        $this->view = new UserView();
        $this->model = new UserModel();
    }

    public function userForm(){
      $this->view->showUserForm();
    }

  }


 ?>
