<?php

class RegisterController extends Controller {

    public $usersObject;

    public function index(){

        $this->usersObject = new Users();
        $this->set('task', 'add');


    }

    public function add(){

        $this->usersObject = new Users();

        $password = $_POST['post_password'];
        $passhash = password_hash($password,PASSWORD_DEFAULT);

        $data = array('first_name'=>$_POST['post_first_name'], 'last_name'=>$_POST['post_last_name'],
            'email'=>$_POST['post_email'],'password'=>$passhash);


        $result = $this->usersObject->registerUser($data);

        $this->set('message', $result);


    }

}
