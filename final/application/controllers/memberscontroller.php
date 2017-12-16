<?php

class MembersController extends Controller
{

    public $membersObject;

    public function users($uID)
    {

        $this->membersObject = new Users();
        $user = $this->membersObject->getUser($uID);
        $this->set('user', $user);

    }

    public function index()
    {

        $this->membersObject = new Users();
        $users = $this->membersObject->getAllUsers();
        $this->set('title', 'The Members View');
        $this->set('users', $users);

    }

    public function update()
    {


        $this->membersObject = new Users();

        $password = $_POST['post_password'];
        $passhash = password_hash($password,PASSWORD_DEFAULT);


        $data = array('uID' => $_POST['uID'], 'firstName' => $_POST['post_first_name'],
            'lastName' => $_POST['post_last_name'], 'email' => $_POST['post_email'],
            'password' => $passhash);


        $result = $this->membersObject->updateUser($data);

        $this->set('message', $result);

    }

    public function edit($uID)
    {

        $this->membersObject = new Users();

        $post = $this->membersObject->getUser($uID);

        $this->set('uID', $post['uID']);
        $this->set('firstName', $post['firstName']);
        $this->set('lastName', $post['lastName']);
        $this->set('task', 'update');


    }
}